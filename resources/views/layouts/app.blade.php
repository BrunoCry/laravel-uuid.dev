<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        @vite('resources/scss/app.scss')
        @vite('resources/js/main.js')
    </head>
    <body>
        <div id="app">
        </div>
    </body>
</html>
