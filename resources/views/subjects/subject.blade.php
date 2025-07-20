@extends('app')

@section('title', 'Przedmioty')

@section('content')
    <div class="flex flex-col items-center justify-start w-full h-screen pt-6 lg:pl-8 gap-y-10">
        <div class="flex w-full items-center justify-center gap-20">
            <p class="text-3xl capitalize font-bold">Przedmioty</p>
            <a href="{{ route('subjects.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 font-extrabold">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </a>
        </div>

        @forelse($user->subjects as $subject)
            <div class="relative max-w-5xl w-full bg-[#f0f0f3] dark:bg-[#303035] border-2 border-black dark:border-white p-8 rounded-xl">
                <div class="absolute top-2 right-4">
                    <span class="text-yellow-400 text-xl">★</span>
                </div>

                <div class="grid grid-cols-2 items-center gap-5 w-full">
                    <div class="text-white text-xl capitalize">{{ $subject->name }}</div>
                    <div class="flex flex-wrap items-center gap-2">
                        @foreach($subject->grade as $grade)
                            <div class="rounded-full border-2 border-white p-2 text-white">{{ $grade->grade }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        @empty
            <p class="text-xl">Jeszcze żadne przedmioty nie zostały dodane</p>
        @endforelse

    </div>
@endsection
