<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }} - @yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        @stack('extra-head')
    </head>
    <body>
        @include('includes.navbar')
        @yield('layout_content')
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        @stack('extra-scripts')
    </body>
</html>
