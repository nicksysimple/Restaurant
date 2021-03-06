@extends('master')

@section('content')

<h2>Login</h2>

	@if(Session::get('status'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	@endif
<form action="/login" method="POST">
	@csrf
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" class="form-control">
	</div>

	<div class="form-group">
		<label for="passsword">Password</label>
		<input type="password" name="password" class="form-control">
	</div>

	<button type="submit" class="btn btn-primary">Login</button>
</form>

@if(count($errors)>0)
<div  class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error}}</li>
		@endforeach
	</ul>


</div>
@endif
@endsection
