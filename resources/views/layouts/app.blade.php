<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/small-logo.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'La Academia') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="body-responsive">
    <div id="app">

        @include('layouts.navbar')

        <main class="@yield('class')">
            @yield('content')
        </main>


        @include('layouts.full-contact')

        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
