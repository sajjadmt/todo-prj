@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Edit Todo
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update' , ['todo' => $todo->id]) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control @error('title') is-invalid @enderror" type="text"
                                       name="title" id="title" value="{{ $todo->title }}">
                                @error('title')
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body"
                                          cols="30" rows="10">{{ $todo->body }}</textarea>
                                @error('body')
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-sm btn-outline-success" type="submit">Update</button>
                                <a href="{{ route('index') }}" class="btn btn-sm btn-outline-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
