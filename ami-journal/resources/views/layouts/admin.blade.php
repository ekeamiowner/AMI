<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Ami</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/styles.min.css">
        <link rel="stylesheet" href="/css/aos.min.css">
    </head>
    <body>
        <main class="container">
            @yield('content')
        </main>
        
        @include('layouts.footer')

        @stack('scripts')
        <script src="/js/bootstrap.js"></script>
        <script src="/js/script.min.js"></script>
        <script src="/js/aos.min.min.js"></script>
        <script src="/js/adminscript.min.js"></script>
    </body>
</html>
