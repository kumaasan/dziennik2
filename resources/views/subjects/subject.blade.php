@extends('app')

@section('title', 'Przedmioty')

@section('content')
    <div class="flex items-center justify-start flex-col w-full h-dvh lg:pl-8 py-3 gap-y-10">
        <div class="flex w-full items-center justify-center gap-20">
            <h2 class="font-bold pt-2 text-3xl">Przedmioty</h2>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 font-extrabold">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </div>



        <div class="flex w-full border-2 border-white gap-x-10">
            <div class="w-1/2 bg-yellow-300 ">no elo melo</div>
            <div class="w-1/2 bg-blue-600 ">no elo melo</div>
        </div>
    </div>
@endsection
