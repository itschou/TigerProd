@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center text-dark my-4">{{ __('Login') }}</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-floating mb-3">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                <label for="email" class="text-dark">{{ __('Email Address') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                <label for="password" class="text-dark">{{ __('Password') }}</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label text-dark" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <div class="form-group mt-4 mb-0">
                                <div class="d-grid"><button type="submit"
                                        class="btn btn-dark btn-block">{{ __('Login') }}</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        @if (Route::has('password.request'))
                            <div class="small"><a
                                    href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></div>
                        @endif
                        <div class="small"><a
                                href="{{ route('register') }}">{{ __('Don\'t have an account? Register!') }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
    </style>
@endsection
