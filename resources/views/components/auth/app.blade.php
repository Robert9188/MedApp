<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>

    <!-- Scripts -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased auth-body-bg">
<div class="min-h-screen body-blur">
    <div class="w-full flex justify-between items-center py-5 px-20 text-2xl fixed top-0 text-white capitalize bg-gray-100 bg-opacity-25">
        <div class="">
            <a href="{{ route('welcome') }}" class="">
                <x-application-logo class="w-14 h-full"/>
            </a>
        </div>
        <div class="flex space-x-8">
            <div class="">
                <a href="{{route('register')}}" class="">
                    S'inscrire
                </a>
            </div>
            <div class="">
                <a href="{{route('dashboard')}}" class="">
                    Mon compte
                </a>
            </div>
        </div>
    </div>
<!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
</body>
</html>
