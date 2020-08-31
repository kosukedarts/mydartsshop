<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Project;
use Carbon\Carbon;
use App\History;
use Storage;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        //$posts = Project::all()->sortByDesc('updated_at');
        //dd($request);
        $cond_mood = $request->mood;
        if ($cond_mood != '') {
          // 検索されたら検索結果を取得する
          $posts = Project::where('mood','like', "%$cond_mood%")->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Project::all();
      }
        return view('project.index', ['posts' => $posts, 'cond_mood' => $cond_mood]);
    }
}
