@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm pt-5">
                <h4>404</h4>
                <p>Page you are looking for is not found, here's a random cat gif to make you feel better:</p>
                <div><img alt="funny cat gif" src="https://cataas.com/cat/gif?{{ rand() }}"></div>
            </div>
        </div>
    </div>
@endsection
