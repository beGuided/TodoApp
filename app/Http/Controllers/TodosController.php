<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index()
    {

    	$todos = Todo::all();
    	return view('Todos.index')->with('todos', $todos);
    }

    public function show($todoid)
    {

    	$todo = Todo::find($todoid);

    	return view('Todos.show')->with('todo', $todo);
    }
}
