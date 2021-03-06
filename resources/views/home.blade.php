@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm pt-5">
                <h4>latest posts</h4>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
                <x-post :post="$post" :size="4"/>
            @endforeach
        </div>
        <div class="row">
            <div class="col">
                <a href="/posts" class="btn btn-success float-end">See all posts</a>
            </div>
        </div>
    </div>
@endsection



