<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
public function index()

{
   $todos = Todo::all();
    return view('index', ['todos' => $todos]);
}

public function create(TodoRequest $request)
  {
    $form = $request->all();
    Todo::create($form);
    return redirect('/');
  }
}


 