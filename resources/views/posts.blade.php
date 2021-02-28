@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm pt-5">
                <h4>All posts</h4>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-3">
                    <div class="card mb-3">
                        <a href="/post/{{ $post->id }}"><img src="https://picsum.photos/400/200?random={{ $post->id }}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">By: <a href="/posts/user/{{ $post->user->id }}">{{ $post->user->name }}</a></p>
                            <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small></p>
                            <p class="card-text">{{ Illuminate\Support\Str::limit($post->body, $limit = 150, $end = '...') }}</p>
                            <a href="/post/{{ $post->id }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            {{ $posts->links() }}
        </div>
    </div>
@endsection



