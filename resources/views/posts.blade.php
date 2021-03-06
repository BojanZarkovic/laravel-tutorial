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
                <x-post :post="$post" :size="3"/>
            @endforeach
        </div>
        <div class="row">
            {{ $posts->links() }}
        </div>
    </div>
@endsection



