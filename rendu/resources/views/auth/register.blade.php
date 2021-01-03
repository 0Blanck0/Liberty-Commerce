@extends('layouts.log')

@include('header')

@include('cookie')

@section('content')
    <div class="register_container">

        <div class="title_container">
            <h2>{{ __('Register') }}</h2>
        </div>

        <div class="form_container">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form_case">
                    <input id="login" type="text" class="@error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
                    <label for="login">{{ __('Login') }}</label>

                    @error('login')
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form_case">
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    @error('email')
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form_case">
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <label for="password">{{ __('Password') }}</label>

                    @error('password')
                        <span class="invalid-feedback red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form_case">
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                </div>

                <div class="fot_container">

                    <div class="btn_container">
                        <button type="submit" class="rainbow-button" alt="Register"></button>
                    </div>

                </div>

            </form>
        </div>
    </div>
@endsection
