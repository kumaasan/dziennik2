@extends('app')

@section('title', 'Zadania')
@section('content')
    <div class="flex flex-col items-center justify-start w-full pt-6 lg:pl-8 gap-y-10" x-data="{ modalOpen: false, selectedTask: null }">
        <div class="flex w-full items-center justify-center gap-20">
            <p class="text-3xl capitalize font-bold text-white">Przypomnienia</p>
        </div>
        <div class="backdrop-blur-xl bg-white/5 border border-white/10 w-full rounded-2xl overflow-hidden">
            <div class="flex items-center justify-between px-7 py-5 bg-gradient-to-r from-white/5 to-transparent">
                <p class="text-xl font-semibold text-white">Wszystkie zadania</p>
                <a href="{{ route('tasks.create') }}" class="text-blue-400 hover:text-blue-300 text-sm font-medium transition-colors flex items-center gap-1 group">
                    Zarządzaj
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <div class="w-full border-t border-white/10"></div>

            <div class="p-7">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @forelse($tasks as $task)
                        <div @click="modalOpen = true; selectedTask = {{ json_encode($task) }}" class="relative group overflow-hidden rounded-xl p-5 backdrop-blur-xl bg-gradient-to-br from-white/5 to-white/0 border border-white/10 hover:border-white/20 hover:from-white/10 hover:shadow-xl hover:scale-[1.02] transition-all duration-300 cursor-pointer">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                            <div class="relative z-10">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="bg-gradient-to-br from-gray-700 to-gray-800 uppercase w-12 h-12 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg border border-white/10">
                                        {{ strtoupper(substr($task->name, 0, 2)) }}
                                    </div>
                                    <span class="text-xs font-medium text-gray-400 bg-white/5 px-2 py-1 rounded-md border border-white/10">
                                        {{ $task->created_at->diffForHumans() }}
                                     </span>
                                </div>

                                <h3 class="text-lg font-bold truncate mb-3 text-white">
                                    {{ $task->name }}
                                </h3>

                                <div class="flex items-center justify-between text-xs pt-3 border-t border-white/10">
                                    <span class="font-bold text-gray-200 truncate max-w-[120px]">
                                        {{ $task->description }}
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
                            <p class="text-xl font-semibold mb-2 text-white">Brak zadań na ten moment</p>
                            <p class="text-gray-400 text-sm mb-6">Dodaj swoje pierwsze zadanie, aby śledzić postępy</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
        <div>
            sekcja z zrobionymi zadaniami
        </div>
        <!-- Modal Overlay -->
        <div x-show="modalOpen"
             x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="modalOpen = false"
             class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">

            <!-- Modal Content -->
            <div @click.stop
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-90"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-90"
                 class="max-w-md w-full mx-4">

                <div class="relative overflow-hidden rounded-xl p-5 bg-gradient-to-br from-white/10 to-white/5 border border-white/20 shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5"></div>

                    <div class="relative z-10">
                        <!-- Modal Header -->
                        <div class="flex items-center justify-between mb-5">
                            <div class="flex items-center gap-3">
                                <div class="bg-gradient-to-br from-gray-700 to-gray-800 uppercase w-12 h-12 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg border border-white/10">
                                    <span x-text="selectedTask?.name ? selectedTask.name.substring(0, 2).toUpperCase() : ''"></span>
                                </div>
                                <h2 class="text-lg font-semibold text-white" x-text="selectedTask?.name"></h2>
                            </div>
                            <button @click="modalOpen = false" class="text-gray-400 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>

                        <div class="border-t border-white/10 pt-4 mb-4">
                            <p class="text-xs text-white mb-2">Opis zadania</p>
                            <p class="text-sm text-gray-200 overflow-y-auto max-h-[30vh] pr-2" x-text="selectedTask?.description"></p>
                        </div>

                        <!-- Task Details Grid -->
                        <div class="grid grid-cols-2 gap-3 mb-4">
                            <div class="bg-white/5 border border-white/10 rounded-xl p-3">
                                <p class="text-xs text-gray-400 mb-1">Status</p>
                                <p class="text-sm text-white font-semibold">Do zrobienia</p>
                            </div>
                            <div class="bg-white/5 border border-white/10 rounded-xl p-3">
                                <p class="text-xs text-gray-400 mb-1">Termin</p>
                                <p class="text-sm text-white font-semibold" x-text="selectedTask?.due_to || 'brak'"></p>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col gap-2">
                            <button class="w-full py-2.5 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white text-sm font-medium rounded-xl transition-all hover:scale-[1.01]">
                                Edytuj
                            </button>
                            <button class="w-full py-2.5 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white text-sm font-medium rounded-xl transition-all hover:scale-[1.01]">
                                Oznacz jako wykonane
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
          [x-cloak] { display: none !important; }
        </style>

@endsection
