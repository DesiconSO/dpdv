<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">

    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="px-4 py-3 pt-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main class="">
        @if(Session::has('success'))
            <div
                class="flex items-center justify-center p-4 mt-4 -mb-8 text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                role="alert">
                <span class="text-base"> {{ Session::get('success') }} </span>
            </div>
        @endif

        @if(Session::has('fail'))
            <div
                class="flex items-center justify-center p-4 mt-4 -mb-8 text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 z-50"
                role="alert">
                <span class="text-base"> {{ Session::get('fail') }} </span>
            </div>
        @endif

        @if(Session::has('pending'))
            <div
                class="flex items-center justify-center p-4 mt-4 -mb-8 text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
                role="alert">
                <span class="text-base"> {{ Session::get('pending') }} </span>
            </div>
        @endif

        @if(Session::has('alert'))
            <div
                class="flex items-center justify-center p-4 mt-4 -mb-8 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800"
                role="alert">
                <span class="text-base"> {{ Session::get('alert') }} </span>
            </div>
        @endif

        <x-alert/>

        {{ $slot }}
    </main>
</div>
@livewireScripts
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>