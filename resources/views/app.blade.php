<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Strona główna')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    {{--font--}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    </style>
    {{--alpine--}}
    <script src="https://unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>
<body class="dark:bg-zinc-800 bg-[#EFEFEF] flex w-full">
<div id="sidebar"
    class="fixed inset-y-0 left-0 z-50 lg:w-64 w-0 transform transition-transform duration-300 lg:relative lg:translate-x-0 lg:block-translate-x-full">
    <x-sidebar/>
</div>
<main class="flex-1 px-6 overflow-auto">
    @yield('content')
</main>
@fluxScripts
</body>
</html>
