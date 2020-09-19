<!DOCTYPE html>
<html>
<head>
	<title>Todos</title>
	<meta charset="utf-8">
	<meta name="">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Todos App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/Todos">todos <span class="sr-only">(current)</span></a>
      </li>
      
     <li class="nav-item active">
        <a class="nav-link" href="/new_todos">create todos  <span class="sr-only">(current)</span></a>
      </li>
    </ul>
   
  </div>
</nav>
<div class="container">

	@yield('content')



</div>

</body>
</html>