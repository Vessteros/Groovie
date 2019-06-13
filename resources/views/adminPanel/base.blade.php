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
    <header id="admin_header">
        <h2>Groovie</h2>
    </header>
    <div id="admin_body">
        <div id="admin_menu">
            @if($page == 2)
                <a id="item2" href="http://vessteros.beget.tech/admin/news" class="menu_item_selected">News</a>
            @else
                <a id="item2" href="http://vessteros.beget.tech/admin/news">News</a>
            @endif

            @if($page == 3)
                <a id="item3" href="http://vessteros.beget.tech/admin/updates" class="menu_item_selected">Updates</a>
            @else
                <a id="item3" href="http://vessteros.beget.tech/admin/updates">Updates</a>
            @endif

            @if($page == 1)
                <a id="item1" href="http://vessteros.beget.tech/admin/feedback" class="menu_item_selected">Feedback</a>
            @else
                <a id="item1" href="http://vessteros.beget.tech/admin/feedback">Feedback</a>
            @endif
            <form method="POST" action="{{ route('logout') }}">
                {{ csrf_field() }}
                <input type="submit" value="Logout" style="cursor: pointer">
            </form>
        </div>
        <div id="admin_content">
            @yield('content')
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>