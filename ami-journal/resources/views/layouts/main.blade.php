<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Ami</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/styles.min.css">
        <link rel="stylesheet" href="/css/aos.min.css">
        <link rel="stylesheet" href="/css/navbar.css">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        @include('layouts.navbar')
        
        @include('layouts.header')

        <main class="container">
            @yield('content')
        </main>
        
        @include('layouts.footer')

        @stack('scripts')
        <script src="/js/bootstrap.js"></script>
        <script src="/js/script.min.js"></script>
        <script src="/js/aos.min.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
