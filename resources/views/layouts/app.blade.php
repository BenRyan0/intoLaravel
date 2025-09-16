<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Laravel") }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

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

            @session('message')
            <div
                id="note-added-alert"
                class="absolute top-3 right-4 bg-green-500 px-2 py-1 w-fit rounded-sm text-white flex flex-row gap-1 transition-opacity duration-500"
            >
                <span class="text-nowrap">{{ session("message") }}</span>
                <svg
                    class="w-[20px]"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M4 12.6111L8.92308 17.5L20 2.5"
                        stroke="#ffffff"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </div>

            <script>
                setTimeout(() => {
                    const alert = document.getElementById("note-added-alert");
                    if (alert) {
                        alert.classList.add("opacity-0");
                        setTimeout(() => alert.remove(), 500); // Remove it after fade
                    }
                }, 3000);
            </script>
            @endSession
            <main class="">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
