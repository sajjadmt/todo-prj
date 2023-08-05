@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $todo->title }}
                    </div>
                    <div class="card-body">
                        {{ $todo->body }}
                    </div>
                    <div class="m-2">
                        <a href="" class="btn btn-sm btn-outline-warning">Edit</a>
                        <a href="{{ route('index') }}" class="btn btn-sm btn-outline-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
