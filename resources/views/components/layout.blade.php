<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Task Manager</title>
        @vite('resources/css/app.css')
        @vite(['resources/js/flash-message.js'])
        @stack('scripts')
    </head>
    <body class="font-helvetica">
        {{ $slot }}
        @if (session()->has('success'))
            <x-success>{{ session('success') }}</x-success>
        @endif
    </body>
</html>
