@extends('app')

@section('title', 'Zadania')
@section('content')
    <div class="flex flex-col items-center justify-start w-full pt-6 lg:pl-8 gap-y-10" x-data="{
        modalOpen: false,
        completedModalOpen: false,
        selectedTask: null,
        selectedCompletedTask: null
    }">
        <div class="flex w-full items-center justify-center gap-20">
            <p class="text-3xl capitalize font-bold text-white">Przypomnienia</p>
        </div>

        <!-- Active Tasks Section -->
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

            <div class="py-5 px-3">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @forelse($tasks as $task)
                        @php
                            $taskData = [
                                'id' => $task->id,
                                'name' => $task->name,
                                'description' => $task->description,
                                'due_to' => $task->due_to ? $task->due_to->format('d-m-Y') : 'brak',
                            ];
                        @endphp
                        <div @click="modalOpen = true; selectedTask = {{ json_encode($taskData) }}" class="relative group overflow-hidden rounded-xl p-5 backdrop-blur-xl bg-gradient-to-br from-white/5 to-white/0 border border-white/10 hover:border-white/20 hover:from-white/10 hover:shadow-xl hover:scale-[1.02] transition-all duration-300 cursor-pointer">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                            <div class="relative z-10">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="bg-gradient-to-br from-gray-700 to-gray-800 uppercase w-12 h-12 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg border border-white/10">
                                        {{ strtoupper(substr($task->name, 0, 2)) }}
                                    </div>
                                    <span class="text-[14px] font-medium text-gray-400 bg-white/5 px-2 py-1 rounded-md border border-white/10">
                                        {{ $task->created_at->diffForHumans() }}
                                    </span>
                                </div>

                                <h3 class="text-lg font-bold truncate mb-3 text-white">
                                    {{ $task->name }}
                                </h3>

                                <div class="flex items-center justify-between text-xs pt-3 border-t border-white/10">
                                    <span class="font-bold text-gray-200 truncate max-w-[120px]">
                                        {{ Str::limit($task->description, 30) }}
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

        <!-- Completed Tasks Section -->
        @if(isset($completedTasks) && $completedTasks->count() > 0)
            <div class="backdrop-blur-xl bg-white/5 border border-white/10 w-full rounded-2xl overflow-hidden">
                <div class="flex items-center justify-between px-7 py-5 bg-gradient-to-r from-green-500/10 to-transparent">
                    <p class="text-xl font-semibold text-white">Ukończone zadania</p>
                    <span class="text-sm font-medium text-green-400 bg-green-500/10 px-3 py-1 rounded-md border border-green-500/20">
                    @php
                        $count = $completedTasks->count();
                        if ($count == 1) {
                            $word = 'zadanie';
                        } elseif ($count % 10 >= 2 && $count % 10 <= 4 && ($count % 100 < 10 || $count % 100 >= 20)) {
                            $word = 'zadania';
                        } else {
                            $word = 'zadań';
                        }
                    @endphp
                        {{ $count }} {{ $word }}
                </span>
                </div>

                <div class="w-full border-t border-white/10"></div>

                <div class="py-5 px-3">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        @foreach($completedTasks as $task)
                            @php
                                $completedTaskData = [
                                    'id' => $task->id,
                                    'name' => $task->name,
                                    'description' => $task->description,
                                    'due_to' => $task->due_to ? $task->due_to->format('d-m-Y') : 'brak',
                                ];
                            @endphp
                            <div @click="completedModalOpen = true; selectedCompletedTask = {{ json_encode($completedTaskData) }}" class="relative overflow-hidden rounded-xl p-5 backdrop-blur-xl bg-gradient-to-br from-green-500/5 to-white/0 border border-green-500/20 opacity-75 transition-all duration-300 hover:opacity-100 hover:scale-[1.02] cursor-pointer">
                                <div class="relative z-10">
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="bg-gradient-to-br from-green-700 to-green-800 uppercase w-12 h-12 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg border border-white/10">
                                            {{ strtoupper(substr($task->name, 0, 2)) }}
                                        </div>
                                        <span class="text-[14px] font-medium text-green-400 bg-green-500/10 px-2 py-1 rounded-md border border-green-500/20 flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        Wykonane
                                    </span>
                                    </div>

                                    <h3 class="text-lg font-bold truncate mb-3 text-white line-through decoration-green-500/50">
                                        {{ $task->name }}
                                    </h3>

                                    <div class="flex items-center justify-between text-xs pt-3 border-t border-white/10">
                                    <span class="font-bold text-gray-400 truncate max-w-[120px]">
                                        {{ Str::limit($task->description, 30) }}
                                    </span>
                                        <span class="text-[12px] text-gray-500">
                                        {{ $task->updated_at->diffForHumans() }}
                                    </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <div class="backdrop-blur-xl bg-white/5 border border-white/10 w-full rounded-2xl overflow-hidden">
                <div class="flex items-center justify-between px-7 py-5 bg-gradient-to-r from-green-500/10 to-transparent">
                    <p class="text-xl font-semibold text-white">Ukończone zadania</p>
                </div>
                <div class="w-full border-t border-white/10"></div>
                <div class="py-12 px-3">
                    <div class="flex flex-col items-center justify-center text-center">
                        <div class="bg-gradient-to-br from-green-500/10 to-green-500/5 rounded-full p-6 mb-4 border border-green-500/20">
                            <svg class="w-10 h-10 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <p class="text-lg font-semibold text-white mb-1">Brak ukończonych zadań</p>
                        <p class="text-gray-400 text-sm">Wykonaj zadania, aby zobaczyć je tutaj</p>
                    </div>
                </div>
            </div>
        @endif

        <!-- Active Task Modal -->
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

            <div @click.stop
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-90"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-90"
                 class="w-full mx-4 max-w-lg md:max-w-xl lg:max-w-2xl">

                <div class="relative overflow-hidden rounded-xl p-5 bg-gradient-to-br from-white/10 to-white/5 border border-white/20 shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5"></div>

                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-5">
                            <div class="flex items-center gap-3">
                                <div class="bg-gradient-to-br from-gray-700 to-gray-800 uppercase size-14 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg border border-white/10">
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
                            <p class="text-md text-white mb-2">Opis zadania</p>
                            <p class="text-xl text-gray-200 overflow-y-auto max-h-[40vh] pr-2" x-text="selectedTask?.description"></p>
                        </div>

                        <div class="grid grid-cols-2 gap-3 mb-4">
                            <div class="bg-white/5 border border-white/10 rounded-xl p-3">
                                <p class="text-lg text-gray-400 mb-1">Status</p>
                                <p class="text-xl text-white font-semibold">Do zrobienia</p>
                            </div>
                            <div class="bg-white/5 border border-white/10 rounded-xl p-3">
                                <p class="text-lg text-gray-400 mb-1">Termin</p>
                                <p class="text-xl text-white font-semibold" x-text="selectedTask?.due_to || 'brak'"></p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            <form method="POST" x-bind:action="selectedTask ? `/tasks/${selectedTask.id}/done` : '#'">
                                @csrf
                                <button type="submit" class="w-full py-2.5 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white text-lg font-medium rounded-xl transition-all hover:scale-[1.01]">
                                    Oznacz jako wykonane
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Completed Task Modal -->
        <div x-show="completedModalOpen"
             x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="completedModalOpen = false"
             class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">

            <div @click.stop
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-90"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-90"
                 class="w-full mx-4 max-w-lg md:max-w-xl lg:max-w-2xl">

                <div class="relative overflow-hidden rounded-xl p-5 bg-gradient-to-br from-white/10 to-white/5 border border-white/20 shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-green-500/10"></div>

                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-5">
                            <div class="flex items-center gap-3">
                                <div class="bg-gradient-to-br from-green-700 to-green-800 uppercase size-14 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg border border-white/10">
                                    <span x-text="selectedCompletedTask?.name ? selectedCompletedTask.name.substring(0, 2).toUpperCase() : ''"></span>
                                </div>
                                <h2 class="text-lg font-semibold text-white line-through decoration-green-500/50" x-text="selectedCompletedTask?.name"></h2>
                            </div>
                            <button @click="completedModalOpen = false" class="text-gray-400 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>

                        <div class="border-t border-white/10 pt-4 mb-4">
                            <p class="text-md text-white mb-2">Opis zadania</p>
                            <p class="text-xl text-gray-200 overflow-y-auto max-h-[40vh] pr-2" x-text="selectedCompletedTask?.description"></p>
                        </div>

                        <div class="grid grid-cols-2 gap-3 mb-4">
                            <div class="bg-green-500/5 border border-green-500/20 rounded-xl p-3">
                                <p class="text-lg text-gray-400 mb-1">Status</p>
                                <p class="text-xl text-green-400 font-semibold flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Wykonane
                                </p>
                            </div>
                            <div class="bg-white/5 border border-white/10 rounded-xl p-3">
                                <p class="text-lg text-gray-400 mb-1">Termin</p>
                                <p class="text-xl text-white font-semibold" x-text="selectedCompletedTask?.due_to || 'brak'"></p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            <form method="POST" x-bind:action="selectedCompletedTask ? `/tasks/${selectedCompletedTask.id}/undone` : '#'">
                                @csrf
                                <button type="submit" class="w-full py-2.5 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white text-lg font-medium rounded-xl transition-all hover:scale-[1.01] flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/>
                                    </svg>
                                    Cofnij do niezrobionych
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
          [x-cloak] { display: none !important; }
        </style>
    </div>
@endsection
