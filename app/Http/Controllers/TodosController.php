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


     public function create(){

        return view('Todos.create');
    }

     public function  Store(){

        $data= request()->all();
        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description =  $data['description'];
         $todo->completed = false;


        $todo->save();
        return redirect('/Todos');
    }


}
