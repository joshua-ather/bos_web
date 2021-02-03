<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- For mobile view --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#1E375B">
    <meta name="msapplication-navbutton-color" content="#1E375B">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1E375B">

    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('img/icon.ico') }}">

    @stack('script_begin')
</head>

<body id="__UENO" class="hold-transition sidebar-mini">

<div class="wrapper">
    @yield('sidebar')
    @yield('content')
    @yield('footer')
</div>

@stack('script_end')

</body>
</html>
