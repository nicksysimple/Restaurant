@extends('master')


@section('content')


 <h5 id="head">Welcome Back , <em>{{ session('name')}}</em> </h5>
 <div class="container">
 		@foreach($restaurants as $resto)

    <div class="jumbotron">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <img class="image col-4" src="images/{{$resto->image}}" alt="Hotel Image">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6"><h2> {{$resto->name}}</h2>
          <p> {{$resto->address}}</p>
          <p> {{$resto->email}}</p>


        </div>
      </div>

      <form action="comment/{{$resto->id}}/comment" method="post">
        @csrf
        <div class="form-group">
          <input type="text" name="Hotel_id" hidden value="">
          <label for="comment">Add Your Comment</label>
          <textarea name="usercomment" rows="3" class="form-control"cols="80" placeholder="Say something!!"></textarea>

          <button type="submit" class="btn btn-primary">Comment</button>
        </div>

      </form>

    </div>


		@endforeach

  	</div>

  	<script type="text/javascript">
  		$("document").ready(function(){
  			$("button.comment").click(function(){
  				alert('you about to comment');
  			});
  		});
  	</script>






@endsection
