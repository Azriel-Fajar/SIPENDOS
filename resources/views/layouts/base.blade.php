@props(['title' => ''])

<!DOCTYPE html>
<html lang="{{ str_Replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }} | {{ config('app.name', 'SIPENDOS') }}</title>
    <link rel="stylesheet" href="/css/dashboard.css" />
    <link rel="stylesheet" href="/css/sidebar.css" />
    <link rel="stylesheet" href="/css/header.css" />
    <link rel="stylesheet" href="/css/loader.css" />
    <link rel="icon" href="/IMG/Logo.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script defer src="/js/sidebar.js"></script>
    <script defer src="/js/loader.js"></script>
</head>

<body>
    {{ $slot }}
</body>

</html>
