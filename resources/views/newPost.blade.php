@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-6">
                <form method="post" action="/admin/post">
                    @csrf
                    <div class="mb-3">
                        <label for="postTitle" class="form-label">Post title</label>
                        <input type="text" class="form-control" id="postTitle" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="postBody" class="form-label">Post body</label>
                        <textarea class="form-control" id="postBody" rows="10" name="body" required></textarea>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection
