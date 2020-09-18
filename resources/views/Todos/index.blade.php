<!DOCTYPE html>
<html>
<head>
	<title>Todos</title>
	<meta charset="utf-8">
	<meta name="">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center my-5" >TODOS PAGE</h1>


<div class="row justify-content-center">

	<div class="container">
	<div class="card card-default">
		
<div class="card-header">
	Todos
</div>
<div class="card-body">
	<ul class="list-group">

@foreach($todos as $todo)
<li class="list-group-item ">

{{$todo-> name }}

<a href= "Todos/{{$todo->id}}" class="btn btn-primary bbt-sm float-right ">View</a>

</li>

@endforeach
</ul>
</div>

	</div>


</div>

</div>



</body>
</html>