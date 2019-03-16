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
    </head>

    <body>
        <div id="app">
            <div class="app-navbar">
                <div class="app-navbar-logo">
                    Groovie
                </div>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <a class="app-navbar-navlink" href="{{ route('login') }}">
                        <img src="{{ asset('resources/img/login.png') }}" class="app-navbar-navimg">
                        <div class="app-navbar-navtitle">Войти</div>
                    </a>
                    <a class="app-navbar-navlink" href="{{ route('register') }}">
                        <img src="{{ asset('resources/img/register.png') }}" class="app-navbar-navimg">
                        <div class="app-navbar-navtitle">Регистрация</div>
                    </a>
                @else
                    <a class="app-navbar-navlink" href="{{ route('accounts') }}">
                        <img src="{{ asset('resources/img/auth.png') }}" class="app-navbar-navimg">
                        <div class="app-navbar-navtitle">Аккаунты</div>
                    </a>
                    <a class="app-navbar-navlink">
                        <img src="{{ asset('resources/img/chats.png') }}" class="app-navbar-navimg">
                        <div class="app-navbar-navtitle">Диалоги</div>
                    </a>
                    <a class="app-navbar-navlink">
                        <img src="{{ asset('resources/img/FAQ.png') }}" class="app-navbar-navimg">
                        <div class="app-navbar-navtitle">FAQ</div>
                    </a>
                    <div class="app-navbar-usermenu">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="{{ asset('resources/img/user.png') }}" class="app-navbar-navimg">
                                <div class="app-navbar-usermenu-title">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </div>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>

                @endif
                <div class="app-by">by TwinkleMeow</div>
            </div>
            <div class="app-content">
                @yield('content')
            </div>

        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>