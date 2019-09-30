<?php

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

Route::get('todo', 'AboutTodo@index');
Route::get("todo/{todo}", "AboutTodo@show");
Route::get("create", "AboutTodo@create");
Route::post("store", "AboutTodo@store");
Route::get("todo/{todo}/edit","AboutTodo@edit");
Route::post("todo/{todo}/update", "AboutTodo@update");
Route::get("todo/{todo}/delete", "AboutTodo@destroy");
