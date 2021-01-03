@extends('layouts.log')

<title>{{ config('app.name', 'Subtech') }}</title>

<link rel="icon" href="../../../public/img/favicon/petit_logo.png">

@include('header')

@include('cookie')

@section('content')
    <div class="address_container">

        <div class="title_container">
            <h2>{{ __('Your Account') }}</h2>
        </div>

        <div class="form_container">
            <form>
                @csrf

                <div class="form_case">
                    <input id="firstname" type="firstname" class="@error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                    <label for="firstname">{{ __('Firstname') }}</label>

                    @error('firstname')
                    <span class="invalid-feedback red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                 </div>

                <div class="form_case">
                    <input id="lastname" type="lastname" class="@error('lastname') is-invalid @enderror" name="lastname" required autocomplete="current-lastname">
                    <label for="lastname">{{ __('Lastname') }}</label>

                    @error('lastname')
                    <span class="invalid-feedback red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form_case">
                    <input id="street" type="street" class="@error('street') is-invalid @enderror" name="street" required autocomplete="current-street">
                    <label for="street">{{ __('Street') }}</label>

                    @error('street')
                    <span class="invalid-feedback red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form_case">
                    <input id="country" type="country" class="@error('country') is-invalid @enderror" name="country" required autocomplete="current-country">
                    <label for="country">{{ __('Country') }}</label>

                    @error('country')
                    <span class="invalid-feedback red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form_case">
                    <input id="postal_code" type="postal_code" class="@error('postal_code') is-invalid @enderror" name="postal_code" required autocomplete="current-postal_code">
                    <label for="postal_code">{{ __('Postal Code') }}</label>

                    @error('postal_code')
                    <span class="invalid-feedback red" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="fot_container">
                    <div class="btn_container">
                        <button type="submit" class="rainbow-button" alt="Save"></button>
                    </div>
                </div>

            </form>
        </div>

    </div>
@endsection
