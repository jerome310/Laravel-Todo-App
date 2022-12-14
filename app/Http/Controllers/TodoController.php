<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
   public function index(){
        $Todos = todo::all();
        return view('welcome', [
         'todos' => $Todos
        ]);
   }

   public function store(){
      $attributes = request([
         'title' => 'title',
         'description' => 'description',
         'isDone' => 'default(false)'
      ]);

      Todo::create($attributes);

      return redirect('/');
   }

   public function update(Todo $todo){
      
      $todo->update(['id' => '']);

      return redirect('/');
   }

   public function destroy(Todo $todo){
      
      $todo -> delete();

      return redirect('/');
   }
}