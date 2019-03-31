<?php session_start(); ?>
        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Groovie') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
    <script src="http://vessteros.beget.tech/resources/assets/js/parallax.min.js"></script>
</head>

<body>
<div id="app">
    <header class="col-lg-12 land-header">
        @if (Auth::guest())
            <a href="{{ route('register') }}" class="col-12 land-header-a">register</a>
            <a href="{{ route('login') }}" class="col-12 land-header-a">login</a>
        @else
            <a href="#" class="col-12 land-header-a">account</a>
        @endif
        <a class="col-12 land-header-a" href="{{ route('/') }}">home</a>
    </header>
    <div class="app-content">
        @yield('content')
    </div>

</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>