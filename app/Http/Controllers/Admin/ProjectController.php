<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use Carbon\Carbon;
use App\History;
use Storage;

class ProjectController extends Controller
{
  public function add()
  {
      return view('admin.project.create');
  }
  
  public function hive()
  {
      return view('admin.project.hive');
  }
  
  public function arban()
  {
      return view('admin.project.arban');
  }
  
  public function teine()
  {
      return view('admin.project.teine');
  }
  
  public function minami()
  {
      return view('admin.project.minami');
  }
  
  public function kaikatsu()
  {
      return view('admin.project.kaikatsu');
  }
  
  public function round()
  {
      return view('admin.project.round');
  }
  
  public function dice()
  {
      return view('admin.project.dice');
  }


  public function create(Request $request)
  {
      $this->validate($request, Project::$rules);
      $project = new Project;
      $form = $request->all();
      
      if (isset($form['image'])) {
        $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
        $project->image_path = Storage::disk('s3')->url($path);
      } else {
          $project->image_path = null;
      }
      
      unset($form['_token']);
      unset($form['image']);
      
      $project->fill($form);
      $project->save();
      // admin/news/createにリダイレクトする
      return redirect('admin/project/create');
  }



public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Project::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのプロジェクトを取得する
          $posts = Project::all();
      }
      return view('admin.project.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }



public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $project = Project::find($request->id);
      if (empty($project)) {
        abort(404);    
      }
      return view('admin.project.edit', ['project_form' => $project]);
  }


  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Project::$rules);
      // News Modelからデータを取得する
      $project = Project::find($request->id);
      // 送信されてきたフォームデータを格納する
      $project_form = $request->all();
      if (isset($project_form['image'])) {
        $path = $request->file('image')->store('public/image');
        $project->image_path = basename($path);
        unset($project_form['image']);
      } elseif (isset($request->remove)) {
        $project->image_path = null;
        unset($project_form['remove']);
      }
      unset($project_form['_token']);

      // 該当するデータを上書きして保存する
      $project->fill($project_form)->save();

      $history = new History;
        $history->project_id = $project->id;
        $history->edited_at = Carbon::now();
        $history->save();
      return redirect('admin/project');
  }



public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $project = Project::find($request->id);
      // 削除する
      $project->delete();
      return redirect('admin/project/');
  }  
}