@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm pt-5">
                <h4>500</h4>
                <p>Unexpected error has occurred, sorry about that, here's a random cat gif to make you feel better:</p>
                <div><img alt="funny cat gif" src="https://cataas.com/cat/gif?{{ rand() }}"></div>
            </div>
        </div>
    </div>
@endsection
