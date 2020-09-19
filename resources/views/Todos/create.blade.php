@extends('layouts.app');

@section('content')

<h1 class="text-center">  Create Todos</h1>

<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card-header">
	Create New Todos
</div>
<div class="card-body">

<form class="form-group" action="/create_todo" method="post">
	@csrf
	<input type="text" name="name" class="form-control" placeholder="name">
	<div class="form-group">
		<textarea name="description" placeholder="description" rows="5" cols="5 " class="form-control"></textarea>
	</div>
	<div class="form-group " >
		<button type="submit" class="btn btn-success"> Create Todo</button>

	</div>
</form>
	</div>
	</div>
</div>


@endsection 