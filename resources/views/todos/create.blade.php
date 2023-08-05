@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Create New Todo
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-sm btn-outline-success" type="submit">Create</button>
                                <a href="{{ route('index') }}" class="btn btn-sm btn-outline-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
