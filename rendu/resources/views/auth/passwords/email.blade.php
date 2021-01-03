@extends('layouts.log')

@include('header')

@include('cookie')

@section('content')
    <div class="register_container">

        <div class="title_container">
            <h2>{{ __('Reset password') }}</h2>
        </div>
            
        <div class="form_container">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form_case">

                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="" autocomplete="email" autofocus>
                    <label for="email">{{ __('E-Mail Address') }}</label>
        
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form_case forgot_container">
                    <div class="fot_container">
                        <div class="btn_container">
                            <button type="submit" class="rainbow-button" alt="Send"></button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
