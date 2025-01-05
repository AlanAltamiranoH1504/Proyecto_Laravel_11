<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @isset($header)
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset
    <!-- Page Content -->
    <main>
        @yield('header')

        @yield('body')

        @yield('footer')
    </main>
</div>
</body>
</html>

{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>CRUD Y MVC</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    --}}{{--Seccion de cabecera--}}
{{--    <header style="border: solid 2px orangered; margin: 15px auto; max-width: 600px">--}}
{{--        @yield('header')--}}
{{--    </header>--}}
{{--    --}}{{--Seccion de body--}}
{{--    <div style="border: solid 2px purple; margin: 15px auto; width: auto">--}}
{{--        @yield('body')--}}
{{--    </div>--}}
{{--    --}}{{--Seccion de footer--}}
{{--    <footer style="border: solid 2px brown; margin: 15px auto; max-width: 600px">--}}
{{--        @yield('footer')--}}
{{--    </footer>--}}
{{--</body>--}}
{{--</html>--}}
