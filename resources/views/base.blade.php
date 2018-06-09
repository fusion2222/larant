<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        @stack('extra-head')
    </head>
    <body>
        @stack('extra-scripts')
    </body>
</html>
