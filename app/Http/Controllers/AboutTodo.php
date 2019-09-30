<?php

namespace App\Http\Controllers;
use App\todo;

use Illuminate\Http\Request;

class AboutTodo extends Controller
{
    public function index()
    {
      return view("todo.todo")->with('todos' , todo::all());
    }


    public function show($todoid){
      return view("todo.show")->with("todos",Todo::find($todoid));
    }


    public function create(){
      return view("todo.create-todo");
    }


    public function store(){
      $data = request() -> all();

      $todo = new Todo();
      $todo->name = $data["name"];
      $todo->save();
      return redirect('/todo');
    }

    public function edit($todoid){
      $todo = Todo::find($todoid);

      return view("todo.edit")->with("todo", $todo );
    }

    public function update($todoid){
      $data = request() -> all();

      $todo = Todo::find($todoid);
      $todo->name = $data["name"];
      $todo->save();
      return redirect('/todo');
    }

    public function destroy($todoid){
      $todo = Todo::find($todoid);

      $todo -> delete();
      return redirect('/todo');
    }
}
