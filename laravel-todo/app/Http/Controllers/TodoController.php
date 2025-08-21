<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller{
    
    public function index(){
        //this is Eloquent orm code
        $todos = Todo::orderBy('created_at', 'desc')->get();
        // ['todos'=> $todos];
        return view('todos.index', compact('todos'));
    }

    public function store(Request $request){
        
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);

        Todo::create([
            'title' => $validated['title'],
            'completed' => false,
        ]);

        return redirect()->route('todos.index'); 
    }

    // Toggle completed flag
    public function toggle(Todo $todo)
    {
        $todo->update(['completed' => ! $todo->completed]);
        return redirect()->route('todos.index');
    }

    // Delete a todo
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
?>