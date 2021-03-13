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
            <div class="col-sm pt-5">
                <a href="/admin/category/new" class="btn btn-success">New Category</a>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-6">
                <ul class="list-group">
                    @foreach($posts as $post)
                        <li class=" {{ $post->deleted ? 'list-group-item list-group-item-danger' : 'list-group-item' }}">{{ Illuminate\Support\Str::limit($post->title, $limit = 50, $end = '...') }} <a href="/admin/post/edit/{{ $post->id }}" class="btn btn-light float-end">Edit</a>
                            <form class="float-end" method="post" action="/admin/post/{{ $post->id }}">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row pt-5">
            {{ $posts->links() }}
        </div>
    </div>
@endsection



