@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm pt-5">
                <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password"
                                 type="password"
                                 name="password"
                                 required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div>
                        <label for="remember_me">
                            <input id="remember_me" type="checkbox" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="btn btn-primary">
                            {{ __('Login') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection




