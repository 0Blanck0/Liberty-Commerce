<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Subtech</title>

        <script src="{{ asset('js/popup.js') }}" defer></script>

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="icon" href="../../../public/img/favicon/petit_logo.png">

        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cookie.css') }}">
    </head>
    <body>

        <header>
            @yield('header')
        </header>

        <main class="py-4">
            @yield('cookie')
            @yield('content')
        </main>

    </body>
</html>
