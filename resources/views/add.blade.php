@extends('master')

@section('content')
	<form action="add" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="name">Name : </label>
			<input type="text" name="name" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="">Email : </label>
			<input type="email" name="email" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="images">Upload Image</label>
			<input type="file" name="image" class="form-control">
		</div>

		<div class="form-group">
			<label for="text">Address : </label>
			<input type="" name="address" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary">Register</button>
	</form>
 
@endsection