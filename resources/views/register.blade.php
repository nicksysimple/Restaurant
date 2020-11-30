@extends('master')

@section('content')
<h1>Register </h1>
<form action="register" method="post">
	@csrf
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" name="username" class="form-control">
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" class="form-control">
	</div>

	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" class="form-control">
	</div>

	<div class="form-group">
		<label for="password-confirmation">Password Confirmation</label>
		<input type="password" name="password-confirmation" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Register</button>
</form>

@endsection