<!DOCTYPE html>
<html>
<head>
	<title>Todo item</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>



<div class="container">
	<h1 class="text-center my-5">
		
{{$todo->name}}

	</h1>

<div class="card card-default">
		
<div class="card-header">
	Details
</div>
<div class="card-body">
	
{{$todo-> description }}


</div>
</div>
</div>


</body>
</html>