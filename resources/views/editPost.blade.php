@extends('layouts.blog')

@section('content')
    <div class="container">
        @if(isset($message))
            <div class="row pt-5">
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            </div>
        @endif
        <div class="row pt-5">
            <div class="col-lg-6">
                <form method="post" action="/admin/post/{{ $post->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="postTitle" class="form-label">Post title</label>
                        <input type="text" class="form-control" id="postTitle" name="title" value="{{ $post->title }}" required>
                    </div>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="postBody" class="form-label">Post body</label>
                        <textarea class="form-control" id="postBody" rows="10" name="body" required>{{ $post->body }}</textarea>
                    </div>
                    @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="categories" class="form-label">Categories</label>
                        <select id="categories" name="categories[]" class="form-select" multiple aria-label="multiple select example">
                            @php
                              $postCategoryIds = $post->categories->pluck('id')->all();
                            @endphp

                            @foreach($categories as $category)
                                <option {{ array_search($category->id, $postCategoryIds) !== false ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Post image</label>
                        <input type="file" class="form-control" id="image" value="{{ old('image') }}" name="image">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection
