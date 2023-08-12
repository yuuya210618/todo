<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo; // 追加

class TodoController extends Controller
{

    public function welcome()
    {
        $todos = Todo::all();

        return view('welcome', compact('todos'));
    }
    // ここまで追加

  public function store(Request $request)
    {
        $todo = new Todo(); 
        $todo->text = $request->text; 
        $todo->save();

        return redirect()->route('welcome');
    }

// ここまで追加

}