@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm pt-5">
                <a href="/admin/post/new" class="btn btn-primary">New Post</a>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-6">
                <ul class="list-group">
                    @foreach($posts as $post)
                        <li class="list-group-item">{{ $post->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection



