@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        @can('create' , \App\Models\Todo::class)
                        <a href="{{ route('create') }}" class="btn abtn-sm btn-outline-info">Create New Todo</a>
                        @endcan
                        <div class="d-flex">
                            <form action="{{ route('search') }}" method="get">
                                <input type="text" name="search" id="search" placeholder="Search Box">
                                <button class="btn btn-sm btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($todos as $todo)
                                <li class="list-group-item d-flex justify-content-between">
                                    <a href="{{ route('show' , ['todo' => $todo->id]) }}" class="text-decoration-none text-black">
                                        {{ $todo->title }}
                                    </a>
                                    <div class="d-flex">
                                        <a href="{{ route('complete' , ['todo' => $todo->id]) }}" class="btn btn-sm btn-outline-info">
                                            @if($todo->completed)
                                                Redo
                                            @else
                                                Complete
                                            @endif
                                        </a>
                                        <form action="{{ route('delete' , ['todo' => $todo->id]) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    {{ $todos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
