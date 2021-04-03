@extends('layouts.blog')

@section('metaTags')
    <meta name="description" content="This is awesome blog! Contact us, we would love to hear from you!">
    <meta name="keywords" content="Blog, News, Contact">
@endsection

@section('content')
    <div class="container">
        @if (\Session::has('message'))
            <div class="row pt-5">
                <div class="alert alert-success" role="alert">
                    {{ \Session::get('message') }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-6 pt-5">
                <form method="post" action="/contact">
                    @csrf
                    <div class="mb-3">
                        <label for="visitorName" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="visitorName" value="{{ old('visitorName') }}" name="visitorName" required>
                        @error('visitorName')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" rows="10" name="message" required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection
