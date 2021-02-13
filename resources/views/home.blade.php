<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Blog</title>
</head>
<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Blog</a>
        </div>
    </nav>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm pt-5">
                    <h4>latest posts</h4>
                </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-sm">
                        <div class="card mb-3">
                            <a href="/post/{{ $post->id }}"><img src="https://picsum.photos/400/200?random={{ $post->id }}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($post->created_at)->diffInDays() . ' days ago'}}</small></p>
                                <p class="card-text">{{ Illuminate\Support\Str::limit($post->body, $limit = 150, $end = '...') }}</p>
                                <a href="/post/{{ $post->id }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
