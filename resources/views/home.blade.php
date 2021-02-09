<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>
</head>
<body class="antialiased">
    <h1>Blog</h1>
    <ul>
        @foreach($posts as $post)
            <li> {{ $post->title }} </li>
        @endforeach
    </ul>
</body>
</html>
