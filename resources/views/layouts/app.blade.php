<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="">
            @include('layouts.navigation')

            <div class="bg-indigo-600 py-4 px-8">
                @if (isset($header))
                    <div class="py-4">
                        {{ $header }}
                    </div>
                @endif
                <div class="relative pb-10">
                    <div class="bg-white p-4 w-full rounded absolute">
                        {{ $slot }}
                    </div>
                </div>

                {{-- <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif
    
                <!-- Page Content -->
                <main class="container mx-auto px-4">
                    {{ $slot }}
                </main> --}}
            </div>
        </div>
    </body>
</html>
