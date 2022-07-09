<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Css/Js-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4d73dab561.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray">
    <!-- Navbar -->
    @include('header')
    <!-- Navbar End -->

    <!-- Content -->
    @yield('content')
    <!-- Content End -->

    <!-- Footer -->
    @include('footer')
    <!-- Footer End -->
</body>

</html>