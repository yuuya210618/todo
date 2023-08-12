<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo; // 追加

class TodoController extends Controller
{

// ここから

  public function welcome()
    {
        return view('welcome');
    }

  public function store(Request $request)
    {
        $todo = new Todo(); 
        $todo->text = $request->text; 
        $todo->save();

        return redirect()->route('welcome');
    }

// ここまで追加

}