@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-6">
                <form method="post" action="/admin/category">
                    @csrf
                    <div class="mb-3">
                        <label for="categoryTitle" class="form-label">Category title</label>
                        <input type="text" class="form-control" id="categoryTitle" value="{{ old('title') }}" name="title" required>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection
