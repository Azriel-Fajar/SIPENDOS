<!DOCTYPE html>
<html lang="{{ str_Replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 SIPENDOS</title>
    <link rel="stylesheet" href="css/fallback.css" />
    <link rel="stylesheet" href="/css/loader.css" />
    <link rel="icon" href="/IMG/Logo.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script defer src="/js/loader.js"></script>
</head>

<body>
    {{-- Loader --}}
    <div id="loader">
        <div class="spinner"></div>
    </div>

    <div class="container">
        <div class="text">
            404
            <p>Page Not Found!</p>
        </div>
    </div>
</body>

</html>
