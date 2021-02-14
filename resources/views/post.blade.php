@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5">
                <div class="card">
                    <div class="card-body">
                        <img src="https://picsum.photos/400/200?random={{ $post->id }}" class="card-img-top" alt="...">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ \Carbon\Carbon::parse($post->created_at)->diffInDays() . ' days ago' }}</h6>
                        <p class="card-text">{{ $post->body }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
