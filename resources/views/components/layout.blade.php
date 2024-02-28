<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Task Manager</title>
        @vite('resources/css/app.css')
    </head>
    <body class="font-helvetica">
        {{ $slot }}
    </body>
</html>