<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1280">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('entropy.name') ?? config('app.name') ?? 'Entropy' }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js', 'vendor/entropy') }}" defer></script>
    @livewireScripts

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css', 'vendor/entropy') }}">
    @livewireStyles
</head>
<body>
<div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
    @include('entropy::layouts.partials.sidebar')

    <div class="flex-1 flex flex-col overflow-hidden">
        @include('entropy::layouts.partials.navbar')

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                @section('content')
                    <div class="flex justify-center">
                        <h3 class="text-gray-700 text-3xl font-medium">{{ \Illuminate\Foundation\Inspiring::quote() }}</h3>
                    </div>
                @show
            </div>
        </main>
    </div>
</div>
</body>
</html>
