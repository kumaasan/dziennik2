@extends('app')

@section('title', 'Przedmioty')

@section('content')
    <div class="flex flex-col items-center justify-start w-full pt-6 lg:pl-8 gap-y-10">
        <div class="flex w-full items-center justify-center gap-20">
            <p class="text-3xl capitalize font-bold text-white">Przedmioty</p>
        </div>

        <div class="backdrop-blur-xl w-full  bg-white/5 border border-white/10 rounded-2xl overflow-hidden">
            <div class="flex items-center justify-between px-7 py-5 bg-gradient-to-r from-white/5 to-transparent">
                <p class="text-xl font-semibold text-white">Wszystkie przedmioty</p>
                <a href="{{ route('subjects.create') }}" class="text-blue-400 hover:text-blue-300 text-sm font-medium transition-colors flex items-center gap-1 group">
                    Dodaj przedmiot
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <div class="w-full border-t border-white/10"></div>

            <div class="py-5 px-3">
                <div class="flex flex-col gap-6">
                    @forelse($user->subjects as $subject)
                        <div class="relative backdrop-blur-xl bg-white/5 border border-white/10 p-8 rounded-2xl hover:bg-white/10 transition-all duration-300">
                            <div class="absolute top-4 right-4">
                                @livewire('favourite-toggle', ['subject' => $subject], key($subject->id))
                            </div>

                            <div class="grid grid-cols-2 items-center gap-5 w-full pr-8">
                                <div class="text-white text-xl capitalize font-semibold">{{ $subject->name }}</div>
                                <div class="flex flex-wrap items-center justify-end gap-2">
                                    @forelse($grades[$subject->id] ?? [] as $grade)
                                        <div class="rounded-full bg-white/10 border border-white/10 hover:bg-white/20 hover:border-white/20 hover:scale-110 px-4 py-2 text-white font-semibold transition-all duration-200 cursor-pointer">
                                            {{ $grade->grade }}
                                        </div>
                                    @empty
                                        <p class="text-gray-400 text-sm italic">Brak ocen</p>
                                    @endforelse
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
                            <p class="text-gray-400 mb-6">Dodaj swój pierwszy przedmiot, aby zacząć organizować oceny</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
