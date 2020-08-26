<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Project;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        //$posts = Project::all()->sortByDesc('updated_at');
        //dd($request);
        $cond_mood = $request->cond_mood;
        if ($cond_mood != '') {
          // 検索されたら検索結果を取得する
          $posts = Project::where('mood', $cond_mood)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Project::all();
      }
        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('project.index', ['posts' => $posts]);
    }
}
