<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="shortcut icon" href="{{ asset('/images/logo.png') }}" type="image/x-icon">
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>
    <script src="{{ asset('/js/jquery.js') }}"></script>
    @yield('header')
    @yield('sidebar')
    @yield('content')
</body>
<style>
    .xmas-magic-rightmost {
        position: fixed;
        bottom: 0;
        right: 0;
        transform: translate(200px, 100px);
        width: 400px;
    }

    .xmas-magic-leftmost {
        position: fixed;
        bottom: 0;
        left: 0;
        transform: translate(-200px, 100px);
        width: 400px;
    }
</style>
</html>
