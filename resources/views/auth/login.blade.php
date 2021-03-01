@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-6">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password" class="form-control" value="{{ old('password') }}" autocomplete="current-password" required>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Remember Me -->
                    <div class="mb-3">
                        <label for="remember_me">
                            <input id="remember_me" type="checkbox" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Login">
                    @if (Route::has('password.request'))
                        <div class="mb-3  pt-5">
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection




