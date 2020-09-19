<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Todos', 'TodosController@index');

Route::get('Todos/{todo}', 'TodosController@show');

Route::get('new_todos', 'TodosController@create');

Route::post('create_todo', 'TodosController@store');

