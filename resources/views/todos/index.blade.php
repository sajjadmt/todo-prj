@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('create') }}" class="btn abtn-sm btn-outline-info">Create New Todo</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($todos as $todo)
                                <li class="list-group-item">
                                    <a href="{{ route('show' , ['todo' => $todo->id]) }}" class="text-decoration-none text-black">
                                        {{ $todo->title }}
                                    </a>
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
