@extends('app')

@section('title', 'Strona główna')

@section('content')
    <div class="flex flex-col items-center justify-start w-full h-screen pt-6 lg:pl-8 gap-10">
        @auth
            <p class="text-3xl capitalize font-bold">Witaj {{ Auth::user()->name }}!</p>
        @endauth
        @guest
                <p class="text-3xl capitalize font-bold">Konto gościa</p>
        @endguest

        <div class="w-full flex items-center justify-center gap-4 ">
            <div class="w-1/2 rounded bg-yellow-500 h-36"></div>
            <div class="w-1/2 rounded bg-blue-800 h-36"></div>
        </div>
        <div class="w-full flex items-center justify-center gap-4">
            <div class="w-1/2 rounded bg-yellow-500 h-36"></div>
            <div class="w-1/2 rounded bg-blue-800 h-36"></div>
        </div>
    </div>
@endsection
