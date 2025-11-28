@extends('app')

@section('title', 'Zarządzanie ocenami')
@section('content')
    <div class="flex flex-col items-center justify-start w-full pt-6 lg:pl-8 gap-y-10">
        <div class="backdrop-blur-xl bg-white/5 border border-white/10 w-full rounded-2xl overflow-hidden">
            <div class="flex items-center justify-between px-7 py-5 bg-gradient-to-r from-white/5 to-transparent">
                <p class="text-xl font-semibold text-white">Wszytskie zadania</p>
                <a href="{{ route('tasks.create') }}" class="text-blue-400 hover:text-blue-300 text-sm font-medium transition-colors flex items-center gap-1 group">
                    Zarządzaj
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            <div class="w-full border-t border-white/10"></div>
            <div class="flex items-center justify-start gap-y-8 flex-col w-full py-10 px-5 ">
                <div class="max-w-2xl w-full backdrop-blur-xl bg-white/5 border border-white/10 p-8 rounded-2xl">
                    <livewire:tasks.add-task />
                </div>
                <div class="max-w-2xl w-full backdrop-blur-xl bg-white/5 border border-white/10 p-8 rounded-2xl">
                    <livewire:tasks.delete-task/>
                </div>
            </div>
        </div>
    </div>
@endsection