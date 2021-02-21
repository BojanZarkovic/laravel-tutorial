@extends('layouts.blog')

@section('content')
    <div class="container">
        @if (\Session::has('message'))
            <div class="row pt-5">
                <div class="alert alert-success" role="alert">
                    {{ \Session::get('message') }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-sm pt-5">
                <a href="/admin/post/new" class="btn btn-success">New Post</a>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-6">
                <ul class="list-group">
                    @foreach($posts as $post)
                        <li class="list-group-item">{{ $post->title }} <a href="/admin/post/edit/{{ $post->id }}" class="btn btn-light float-end">Edit</a>
                            <form method="post" action="/admin/post/{{ $post->id }}">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger float-end" type="submit" value="Delete">
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
            {{ $posts->links() }}
    </div>
@endsection



