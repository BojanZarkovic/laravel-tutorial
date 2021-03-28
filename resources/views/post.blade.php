@extends('layouts.blog')

@section('metaTags')
    <meta name="description" content="{{ $post->description ? $post->description : 'This is awesome blog! Check it out!' }}">
    <meta name="keywords" content="{{ $post->keywords ? $post->keywords : 'Blog, News' }}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5">
                <x-post :post="$post" :size="12" :isPreview=false />
            </div>
        </div>
    </div>
@endsection
