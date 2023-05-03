<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pricing example for Bootstrap</title>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>

@include('layouts.header')

@yield('content')

@include('layouts.footer')

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
