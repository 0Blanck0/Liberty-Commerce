<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Subtech</title>

        <script src="{{ asset('js/managerProducts.js') }}" defer></script>
        <script src="{{ asset('js/social.js') }}" defer></script>
        <script src="{{ asset('js/popup.js') }}" defer></script>
        <script src="{{ asset('js/com.js') }}" defer></script>

        <link rel="icon" href="../../../public/img/favicon/petit_logo.png">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/paniers.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cookie.css') }}">
    </head>
    <body>

        <header>
            @yield('header')
        </header>

        <main>
            @yield('cookie')
            @yield('content')
        </main>

        <footer>
            @yield('footer')
        </footer>

    </body>
</html>
