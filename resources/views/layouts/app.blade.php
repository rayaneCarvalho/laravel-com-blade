<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Laravel Blade Template">
        <meta name="author" content="Rayane Carvalho">
        <meta name="keywords" content="laravel, blade, blade template">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>App Name - @yield('title')</title>

    </head>
    <body>
        @section ('sidebar')
            This is the master sidebar.
        @show

        <div id="app" class="container">
            @yield('content')
        </div>

        <script src="{{asset('js/app.js')}}"></script>
        @stack('scripts')

    </body>
    
</html>
