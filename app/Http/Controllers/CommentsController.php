<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Restaurant;




class CommentsController extends Controller
{

    function store(Request $req ){


      $comment = new Comment;
      $comment->usercomment = $req->input('usercomment');
      $comment->user_id = Auth::id();
      $comment->restaurant_id = $req->id;
      $comment->save();

    return back();
    }


    function show($id){

      $restoid = Restaurant::find($id)->comments;

      return $restoid;

    }

    function comments(){
      $comments =Restaurant::get()->comments->usercomment;

      foreach ($comments as $comment) {
      echo $comment->usercomment;
}



    }
}
