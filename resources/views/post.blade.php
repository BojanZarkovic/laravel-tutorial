<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>{{ $post->title }}</title>
</head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">Blog</a>
            </div>
        </nav>
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
    </body>
</html>
