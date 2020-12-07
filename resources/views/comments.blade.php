@extends('master')
@section('content')

<div class="jumbotron">

  <ul>
    @foreach($restaurants->comments as $comment)
      <li>{{$comment->usercomment}}</li>

    @endforeach
  </ul>


</div>

@endsection
