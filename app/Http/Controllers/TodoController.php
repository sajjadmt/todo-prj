<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestValidation;
use App\Models\Todo;
use App\Notifications\CreateTodoNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

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

        $todo = Todo::create([
            'user_id' => Auth::user()->id,
            'title' => $data['title'],
            'body' => $data['body']
        ]);

        Notification::send(Auth::user(),new CreateTodoNotification($todo));

        return redirect()->route('index');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit' , compact('todo'));
    }

    public function update(Todo $todo , RequestValidation $request)
    {
        $data = $request->validated();

        $todo->update([
            'title' => $data['title'],
            'body' => $data['body'],
        ]);

        return back();
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return back();
    }

    public function complete(Todo $todo)
    {
        if ($todo->completed){
            $todo->update([
                'completed' => 0
            ]);
        }else{
            $todo->update([
                'completed' => 1
            ]);
        }
        return back();
    }

    public function search(Request $request)
    {
        $result = Todo::search($request->search)->get();

        return view('todos.search-result' , compact('result'));
    }

}
