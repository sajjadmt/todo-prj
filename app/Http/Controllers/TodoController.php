<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestValidation;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::latest()->paginate(5);

        return view('todos.index' , compact('todos'));
    }

    public function show(Todo $todo)
    {
        return view('todos.show',compact('todo'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(RequestValidation $request)
    {
        $data = $request->validated();

        Todo::create([
            'user_id' => Auth::user()->id,
            'title' => $data['title'],
            'body' => $data['body']
        ]);

        return redirect()->route('index');
    }

}
