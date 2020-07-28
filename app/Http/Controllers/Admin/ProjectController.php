<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class projectController extends Controller
{
  public function add()
  {
      return view('admin.project.create');
  }



  public function create(Request $request)
  {
      $this->validate($request, Project::$rules);
      $project = new Project;
      $form = $request->all();
      
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $project->image_path = basename($path);
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

}
