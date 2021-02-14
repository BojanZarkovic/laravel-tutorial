<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Blog</a>
            @if(Auth::user())
                <p>{{ Auth::user()->email }}</p>
                <a href="/admin">admin</a>
                <form method="post" action="/logout">
                    @csrf
                    <input class="btn btn-primary" type="submit" value="Logout">
                </form>
            @else
                <a href="/login">login</a>
            @endif
        </div>
    </nav>

    <!-- Page Content -->
    @yield('content')

</body>
</html>
