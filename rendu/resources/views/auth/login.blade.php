@extends('layouts.log')

@include('header')

@include('cookie')

@section('content')
    
    <div class="login_container">

        <div class="title_container">
            <h2>{{ __('Login') }}</h2>
        </div>

        <div class="form_container">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form_case">
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    @error('email')
                    <span class="invalid-feedback red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form_case">
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label for="password">{{ __('Password') }}</label>

                    @error('password')
                    <span class="invalid-feedback red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form_case forgot_container">
                    <div class="fot_container">
                        <div class="btn_container">
                            <button type="submit" class="rainbow-button" alt="Register"></button>
                        </div>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="fot_container">
                            <a class="btn btn-link forgot_btn" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif
                </div>

            </form>
        </div>

    </div>
@endsection
