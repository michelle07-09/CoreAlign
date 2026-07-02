<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'CoreAlign') }}</title>

        <!-- Fonts and Icons (From the original HTML) -->
        <link href="https://fonts.googleapis.com/css2?family=Cabinet+Grotesk:wght@700;800&family=Inter+Tight:wght@400;500;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])
        @inertiaHead
    </head>
    <body class="bg-background text-on-surface antialiased overflow-hidden">
        @inertia
    </body>
</html>
