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

        <!-- Styles -->
        @livewireStyles
    </head>
    <style>
    .background {
        background-image: url({{asset('images/img1.jpg')}});
        background-size: cover; /* Para que la imagen cubra todo el contenedor */
        background-position: center center;
        background-repeat: no-repeat; /* Evita que la imagen se repita */
        min-height: 100vh; /* Asegura que el contenedor tenga al menos el alto de la ventana */
        }
        .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.158) !important;
      }
      </style>
    <body class="font-sans antialiased  bg-gray-100">
        <x-banner/>

        <div class="pos background min-h-screen bg-gray-100 dark:bg-gray-900">

            @livewire('navigation-menu')
             <!-- Page Heading -->
             @if (isset($header))

            @endif

            <!-- Page Content -->
            <main>
                {{$slot}}

            </main>
            @stack('modals')

            @livewireScripts
        </div>

    </body>
</html>
