<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--Style-->
    <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" >
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>
<body>

    @include('layouts.inc.tenant-navbar')

<div id="layoutSidenav">
    @include('layouts.inc.tenant-sidebar')

    <div id="layoutSidenav_content">
        <main>
        @yield('content')
        </main>
    </div>

</div>

<script src="{{ asset ('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset ('assets/js/scripts.js') }}"></script>


</body>
</html>
