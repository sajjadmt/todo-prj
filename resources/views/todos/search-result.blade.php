@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Search Result
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($result as $todo)
                                <li class="list-group-item d-flex justify-content-between">
                                    {{ $todo->title }}
                                    <a href="{{ route('show' , ['todo' => $todo->id]) }}" class="btn btn-sm btn-outline-success">Show</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
