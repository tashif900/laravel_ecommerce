<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Vue Default Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/fontawesome-all.min.css')}}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{asset('assets/flaticon.css')}}">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <!-- Vue Default Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    <div id="app">           
        <router-view></router-view>
    </div>

    <script>
        var domain = window.location.pathname;
        var lastIndex = domain.lastIndexOf('/');
        window.domain_url = domain.substr(0,lastIndex);
    </script>
</body>
</html>
