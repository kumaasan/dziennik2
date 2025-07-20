@extends('app')

@section('title', 'Strona główna')

@section('content')
    <div class="flex flex-col items-center justify-start w-full h-screen pt-6 lg:pl-8 gap-10">
        <div class="flex flex-col items-center justify-center lg:gap-8 gap-10">
            @auth
                <p class="text-3xl capitalize font-bold">Witaj {{ Auth::user()->name }}!</p>

                <x-fav-subject-home-page/>
            @endauth
            @guest
                <p class="text-3xl capitalize font-bold">Konto gościa</p>
                <p class="text-xl">Konto gościa nie posiada funkcji ulubionych przedmiotów</p>
            @endguest
        </div>
    </div>
@endsection
