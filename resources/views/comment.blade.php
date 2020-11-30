@extends('master')
@section('content')
  <form action="comment" method="post">
    @csrf
    <div class="form-group">
      <label for="comment">Add Your Comment</label>
      <textarea name="usercomment" rows="4" class="form-control"cols="80"></textarea>

      <button type="submit" class="btn btn-primary">Comment</button>
    </div>

  </form>
@endsection
