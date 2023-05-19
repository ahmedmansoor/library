<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Library Management System') }}</title>
    <link rel="icon" type="image/svg" href="{{ asset('svg/emblem.svg')}}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/darkmode.js') }}" defer></script>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="antialiased">
    @include('layouts.sidebar')
    <div class="min-h-screen py-2 md:py-12 px-5 md:px-8 dark:bg-bg_darker">
        <main>
            @yield('content')
            @yield('scripts')
            <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
            <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        </main>
    </div>
    {{-- @include('layouts.footer') --}}
</body>
</html>
