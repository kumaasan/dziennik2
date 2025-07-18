@extends('app')

@section('title', 'Dodaj nowy przedmiot')

@section('content')

    <div class="flex flex-col items-center justify-start w-full h-screen pt-6 lg:pl-8 gap-y-10">
        <div class="flex w-full items-center justify-center gap-20">
            <p class="text-3xl capitalize font-bold">Dodaj nowy przedmiot</p>
        </div>
        <div class="flex items-center justify-center gap-y-25 flex-col w-full h-dvh ">
            <div class="max-w-2xl w-full bg-[#f0f0f3] dark:bg-[#303035] border-2 border-black dark:border-white p-8 rounded-xl">
                <livewire:add-new-subject />
            </div>

            <div class="max-w-2xl w-full bg-[#f0f0f3] dark:bg-[#303035] border-2 border-black dark:border-white p-8 rounded-xl">
                <livewire:delete-subject/>
            </div>
        </div>

    </div>

@endsection
