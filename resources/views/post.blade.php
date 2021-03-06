@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5">
                <x-post :post="$post" :size="12"/>
            </div>
        </div>
    </div>
@endsection
