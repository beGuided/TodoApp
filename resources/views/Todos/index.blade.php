


@extends('layouts.app');

@section('content')
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


@endsection

