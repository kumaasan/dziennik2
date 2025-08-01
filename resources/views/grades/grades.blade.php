@extends('app')

@section('title', 'Oceny')

@section('content')
    <div class="flex flex-col items-center justify-start w-full pt-6 lg:pl-8 gap-y-10">
        <p class="text-3xl font-bold">Dodawanie ocen</p>
        <livewire:grades-manager/>
    </div>
@endsection
