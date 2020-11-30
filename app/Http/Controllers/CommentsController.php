<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;

class CommentsController extends Controller
{
    //

    function store(Request $req){
      $validate= $req->validate([

        'usercomment' =>'required|min:10'
      ]);

      $comment = new Comment;
      $comment->usercomment = $req->input('usercomment');
      $comment->user_id=Auth::id();
      $comment->save();

    }
}
