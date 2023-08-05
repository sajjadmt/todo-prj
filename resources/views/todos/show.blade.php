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
                </div>
            </div>
        </div>
    </div>
@endsection
