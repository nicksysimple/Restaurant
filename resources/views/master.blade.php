<!DOCTYPE html>
<html>
<head>
	<title>Restaurant App</title>
	<link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('/css/styles.css')}}" type="text/css">

	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="header">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Resto</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list">List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add">Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Search">Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="register">Register</a>
      </li>
    </ul>
  </div>
</nav>
		</div>
		<div class="body">
			@yield('content')
		</div>

	</div>
  <script type="text/javascript">
    $("document").ready(function(){
      setTimeout(function(){
        $("div.alert").remove();

      },4000);

    });
  </script>

</body>
</html>
