<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>
    <script src="{{ asset('/js/jquery.js') }}"></script>
    @yield('sidebar')
    @yield('content')
</body>
</html>
