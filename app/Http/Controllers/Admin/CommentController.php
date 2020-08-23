<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{
  public function post()
  {
      return view('admin.project.comment');
  }

  public function comment(Request $request)
  {
      $this->validate($request, Comment::$rules);
      $comment = new Comment;
      $form = $request->all();
      
      unset($form['_token']);
      unset($form['image']);
      
      $comment->fill($form);
      $comment->save();
      // admin/news/createにリダイレクトする
      return redirect('admin/project/comment');
  }  //
}
