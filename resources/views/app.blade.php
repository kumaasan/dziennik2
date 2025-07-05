<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Strona główna')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>
<body class="bg-zinc-800 flex h-screen w-full">
    <x-sidebar/>
    <div class="p-6 absolute lg:hidden">
        <flux:sidebar.toggle icon="bars-2" inset="left"/>
    </div>
    <div class="flex items-center justify-center w-full h-screen ">
        @yield('content')
    </div>
@fluxScripts
</body>
</html>
