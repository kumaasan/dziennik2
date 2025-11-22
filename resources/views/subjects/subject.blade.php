@extends('app')

@section('title', 'Przedmioty')

@section('content')
    <div class="flex flex-col items-center justify-start w-full h-screen pt-6 lg:pl-8 gap-y-10">
        <div class="flex w-full items-center justify-center gap-20">
            <p class="text-3xl capitalize font-bold text-white">Przedmioty</p>
            <a href="{{ route('subjects.create') }}" class="text-white hover:text-gray-300 transition-colors group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="size-8 font-extrabold group-hover:rotate-90 transition-transform duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                </svg>
            </a>
        </div>

        @forelse($user->subjects as $subject)
            <div class="relative max-w-5xl w-full backdrop-blur-xl bg-white/5 border border-white/10 p-8 rounded-2xl hover:bg-white/10 transition-all duration-300">
                <div class="absolute top-4 right-4">
                    @livewire('favourite-toggle', ['subject' => $subject], key($subject->id))
                </div>

                <div class="grid grid-cols-2 items-center gap-5 w-full pr-4">
                    <div class="text-white text-xl capitalize font-semibold">{{ $subject->name }}</div>
                    <div class="flex flex-wrap items-center justify-end gap-2">
                        @foreach($grades[$subject->id] ?? [] as $grade)
                            <div class="rounded-full bg-white/10 border border-white/10 hover:bg-white/20 hover:border-white/20 hover:scale-110 px-4 py-2 text-white font-semibold transition-all duration-200 cursor-pointer">
                                {{ $grade->grade }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @empty
            <div class="flex flex-col items-center justify-center py-16 text-center">
                <div class="bg-gradient-to-br from-white/10 to-white/5 rounded-full p-8 mb-6 border border-white/10">
                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <p class="text-2xl font-semibold mb-3 text-white">Jeszcze żadne przedmioty nie zostały dodane</p>
                <p class="text-gray-400 mb-6">Kliknij przycisk + powyżej, aby dodać swój pierwszy przedmiot</p>
                <a href="{{ route('subjects.create') }}" class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-medium rounded-xl px-6 py-3 transition-all duration-200 hover:scale-[1.01]">
                    Dodaj przedmiot
                </a>
            </div>
        @endforelse
    </div>
@endsection
