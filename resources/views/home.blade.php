@extends('app')

@section('title', 'Strona główna')

@section('content')
    <div class="flex flex-col items-center justify-start w-full pt-6 lg:pl-8 gap-y-10">
        @auth
            <!-- Welcome Header -->
            <div class="w-full">
                <p class="text-3xl capitalize font-bold text-white">Witaj, {{ Auth::user()->name }}!</p>
                <p class="text-gray-300 mt-2">Oto podsumowanie Twojej aktywności</p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 w-full">
                <!-- Stat Card 1 - Blue gradient -->
                <div class="relative group overflow-hidden rounded-2xl p-6 backdrop-blur-xl bg-gradient-to-br from-blue-500/10 to-blue-600/5 border border-blue-500/20 hover:border-blue-400/40 hover:shadow-2xl hover:shadow-blue-500/20 hover:scale-[1.02] transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="bg-gradient-to-br from-blue-400 to-blue-600 p-3 rounded-xl shadow-lg shadow-blue-500/30">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-sm mb-1 text-gray-400">Liczba ocen dodanych</p>
                        <p class="text-4xl font-bold text-white mb-1">{{ $data['gradesCount'] }}</p>
                        <p class="text-emerald-400 text-sm font-medium">+5 w tym tygodniu</p>
                    </div>
                </div>

                <!-- Stat Card 2 - Purple gradient -->
                <div class="relative group overflow-hidden rounded-2xl p-6 backdrop-blur-xl bg-gradient-to-br from-purple-500/10 to-purple-600/5 border border-purple-500/20 hover:border-purple-400/40 hover:shadow-2xl hover:shadow-purple-500/20 hover:scale-[1.02] transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="bg-gradient-to-br from-purple-400 to-purple-600 p-3 rounded-xl shadow-lg shadow-purple-500/30">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-sm mb-1 text-gray-400">Średnia ucznia</p>
                        <p class="text-4xl font-bold text-white mb-1">{{ $data['studentAverage'] }}</p>
                        <p class="text-sm text-gray-400 font-medium">Z {{ $data['subjectsCount'] }} przedmiotów</p>
                    </div>
                </div>

                <!-- Stat Card 3 - Amber gradient -->
                <div class="relative group overflow-hidden rounded-2xl p-6 backdrop-blur-xl bg-gradient-to-br from-amber-500/10 to-orange-600/5 border border-amber-500/20 hover:border-amber-400/40 hover:shadow-2xl hover:shadow-amber-500/20 hover:scale-[1.02] transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-amber-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="bg-gradient-to-br from-amber-400 to-orange-500 p-3 rounded-xl shadow-lg shadow-amber-500/30">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-sm mb-1 text-gray-400">Ilość zadań</p>
                        <p class="text-4xl font-bold text-white mb-1">67</p>
                        <p class="text-sm text-gray-400 font-medium">W tym semestrze</p>
                    </div>
                </div>

                <!-- Stat Card 4 - Emerald gradient -->
                <div class="relative group overflow-hidden rounded-2xl p-6 backdrop-blur-xl bg-gradient-to-br from-emerald-500/10 to-teal-600/5 border border-emerald-500/20 hover:border-emerald-400/40 hover:shadow-2xl hover:shadow-emerald-500/20 hover:scale-[1.02] transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="bg-gradient-to-br from-emerald-400 to-teal-500 p-3 rounded-xl shadow-lg shadow-emerald-500/30">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-sm mb-1 text-gray-400">Wykonane zadania</p>
                        <p class="text-4xl font-bold text-white mb-1">2137</p>
                        <p class="text-emerald-400 text-sm font-medium">🔥 Świetna passa!</p>
                    </div>
                </div>
            </div>

            <!-- Favorite Subjects Section -->
            <div class="backdrop-blur-xl bg-white/5 border border-white/10 w-full rounded-2xl overflow-hidden">
                <div class="flex items-center justify-between px-7 py-5 bg-gradient-to-r from-white/5 to-transparent">
                    <p class="text-xl font-semibold text-white">Ulubione przedmioty</p>
                    <a href="{{ route('subjects') }}" class="text-blue-400 hover:text-blue-300 text-sm font-medium transition-colors flex items-center gap-1 group">
                        Zarządzaj
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <div class="w-full border-t border-white/10"></div>

                <!-- Subject Cards Grid -->
                <div class="p-7">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        @forelse($data['favoriteSubjects'] ?? [] as $subject)
                            <div class="relative group overflow-hidden rounded-xl p-5 backdrop-blur-xl bg-gradient-to-br from-white/5 to-white/0 border border-white/10 hover:border-white/20 hover:from-white/10 hover:shadow-xl hover:scale-[1.02] transition-all duration-300 cursor-pointer">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                                <div class="relative z-10">
                                    <!-- Subject Header -->
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="bg-gradient-to-br from-gray-700 to-gray-800 uppercase w-12 h-12 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg border border-white/10">
                                            {{ mb_substr($subject->name, 0, 1) }}
                                        </div>
                                        <button class="text-red-400 hover:text-red-300 hover:scale-110 transition-all">
                                            <svg class="size-6" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- Subject Name -->
                                    <h3 class="text-lg font-bold mb-3 text-white">{{ $subject->name }}</h3>

                                    <!-- Quick Stats -->
                                    <div class="flex items-center justify-between text-xs pt-3 border-t border-white/10">
                                        <span class="text-gray-300">Liczba ocen: {{ $subject->grade()->count() }}</span>
                                        <span class="font-bold {{ $subject->average >= auth()->user()->minimal_average ? 'text-emerald-400' : 'text-red-400' }}">
                                            {{ number_format($subject->average, 2) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full flex flex-col items-center justify-center py-16 text-center">
                                <div class="bg-gradient-to-br from-white/10 to-white/5 rounded-full p-8 mb-6 border border-white/10">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </div>
                                <p class="text-xl font-semibold mb-2 text-white">Brak ulubionych przedmiotów</p>
                                <p class="text-gray-400 text-sm mb-6">Dodaj swoje pierwsze przedmioty, aby śledzić postępy</p>
                                <button class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-medium rounded-xl px-6 py-3 text-center transition-all duration-200 shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-105">
                                    Dodaj przedmiot
                                </button>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Zadania Section -->
            <div class="backdrop-blur-xl bg-white/5 border border-white/10 w-full rounded-2xl overflow-hidden">
                <div class="flex items-center justify-between px-7 py-5 bg-gradient-to-r from-white/5 to-transparent">
                    <p class="text-xl font-semibold text-white">Zadania do zrobienia</p>
                    <a href="#" class="text-blue-400 hover:text-blue-300 text-sm font-medium transition-colors flex items-center gap-1 group">
                        Zarządzaj
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <div class="w-full border-t border-white/10"></div>

                <div class="p-7">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="col-span-full flex flex-col items-center justify-center py-16 text-center">
                            <div class="bg-gradient-to-br from-white/10 to-white/5 rounded-full p-8 mb-6 border border-white/10">
                                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                            </div>
                            <p class="text-xl font-semibold mb-2 text-white">Brak zadań</p>
                            <p class="text-gray-400 text-sm mb-6">Dodaj swoje pierwsze zadania</p>
                            <button class="bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-medium rounded-xl px-6 py-3 text-center transition-all duration-200 shadow-lg shadow-purple-500/30 hover:shadow-xl hover:shadow-purple-500/40 hover:scale-105">
                                Dodaj zadanie
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        @endauth

        @guest
            <!-- Guest View -->
            <div class="backdrop-blur-xl bg-white/5 border border-white/10 w-full rounded-2xl p-16">
                <div class="flex flex-col items-center justify-center text-center">
                    <div class="bg-gradient-to-br from-white/10 to-white/5 rounded-full w-24 h-24 flex items-center justify-center mb-8 border border-white/10">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <p class="text-3xl font-bold mb-4 text-white">Konto gościa</p>
                    <p class="text-gray-300 mb-8 max-w-md">Zaloguj się, aby uzyskać dostęp do ulubionych przedmiotów i śledzenia postępów</p>
                    <a href="{{ route('login') }}" class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-medium rounded-xl px-8 py-3 text-center transition-all duration-200 shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-105">
                        Zaloguj się
                    </a>
                </div>
            </div>
        @endguest
    </div>
@endsection
