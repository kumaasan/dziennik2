@extends('app')

@section('title', 'Dodaj nowy przedmiot')

@section('content')
    <div class="flex flex-col items-center justify-start w-full h-screen pt-6 lg:pl-8 gap-y-10">
        <div class="flex w-full items-center justify-center gap-20">

            <a href="{{route('subjects')}}" class="text-white hover:text-gray-300 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 font-extrabold rotate-180">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>

            <p class="text-3xl capitalize font-bold text-white">Dodaj nowy przedmiot</p>
        </div>
        <div class="flex items-center justify-center gap-y-8 flex-col w-full h-dvh ">
            <div class="max-w-2xl w-full backdrop-blur-xl bg-white/5 border border-white/10 p-8 rounded-2xl">
                <livewire:add-new-subject />
            </div>

            <div class="max-w-2xl w-full backdrop-blur-xl bg-white/5 border border-white/10 p-8 rounded-2xl">
                <livewire:delete-subject/>
            </div>
        </div>

    </div>

@endsection
