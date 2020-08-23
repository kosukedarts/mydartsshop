<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Comment;

class CommentController extends Controller
{
    public function hive(Request $request)
    {
        $posts = Comment::all()->sortByDesc('updated_at');

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('project.hive', ['posts' => $posts]);
    }//
}
