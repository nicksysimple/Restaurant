@extends('master')


@section('content')


 <h5>Welcome Back , <em>{{ session('name')}}</em> </h5>
 <div class="container">
 	<div class="row">
 		@foreach($resto as $key)
		 	<div class="col-sm-12 col-md-6 col-lg-6">
		 		<img class="image col-4" src="images/{{$key->image}}" alt="Hotel Image">
		 	</div>
		 	<div class="col-sm-12 col-md-6 col-lg-6"><h2> {{$key->name}}</h2>
			 	<p> {{$key->address}}</p>
			 	<p> {{$key->email}}</p>

			 	<button id="comment" type="onclick" class="btn btn-primary">Add comment</button>
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
