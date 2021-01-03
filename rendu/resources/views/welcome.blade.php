@extends('layouts.welcome')

@include('header')

@include('cookie')

@section('content')
    <div>
        <h2>{{ __('Accueil') }}</h2>
        <h2>Welcome to Subtech !</h2>
    </div>
@endsection

@include('footer')
