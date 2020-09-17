<!DOCTYPE html>
<html>
<head>
	<title>Todos</title>
	<meta charset="utf-8">
	<meta name="">
	<link rel="stylesheet" type="text/css" href="./styles/bootstrap.css">
</head>
<body>
<h1 class="text-center my-5" >Todos</h1>
<ul>
@foreach($todos as $todo)
<li>
{{$todo-> name}}
</li>

@endforeach
</ul>
</body>
</html>