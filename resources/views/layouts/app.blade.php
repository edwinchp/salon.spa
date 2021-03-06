<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/service.css')}}">
    <link href="{{asset('css/fontawesome-free-5.12.1-web/css/all.css')}}" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>

    <div id="app">
        @include('layouts.nav')
        @include('layouts.success_alert')
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>

    </div>

    <style>
        #success-message {
            position: fixed;
            z-index: 10;
            left: 10px;
            bottom: 10px;
        }
    </style>
</body>

</html>