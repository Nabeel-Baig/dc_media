<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ $setting->title }}</title>
    @include('front.include.css')
</head>
<body>
    @include('front.include.header')
        @yield('app')
    @include('front.include.footer')
    @include('front.include.js')
</body>
</html>
