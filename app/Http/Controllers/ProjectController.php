<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Project;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $posts = Project::all()->sortByDesc('updated_at');

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('project.index', ['posts' => $posts]);
    }
}
