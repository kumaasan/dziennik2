@extends('app')

@section('title', 'Ustawienia')

@section('content')
    <div class="flex flex-col items-center justify-start w-full pt-6 lg:pl-8 gap-y-10">
        <div class="w-full">
            <p class="text-3xl capitalize font-bold text-white">Ustawienia</p>
            <p class="text-gray-300 mt-2">Zarządzaj swoim kontem i preferencjami</p>
        </div>

        <livewire:settings.account-section/>

        <!-- Zarządzanie ocenami -->
        <div class="backdrop-blur-xl bg-white/5 border border-white/10 w-full rounded-2xl overflow-hidden">
            <div class="px-7 py-5 bg-gradient-to-r from-white/5 to-transparent">
                <p class="text-xl font-semibold text-white">Zarządzanie ocenami</p>
            </div>

            <div class="w-full border-t border-white/10"></div>

            <livewire:settings.minimal-average-section/>
        </div>

        <!-- Zarządzanie kontem -->
        <div class="relative group overflow-hidden rounded-2xl backdrop-blur-xl bg-gradient-to-br from-red-500/10 to-red-600/5 border border-red-500/20 hover:border-red-400/40 transition-all duration-300 w-full">
            <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

            <div class="relative z-10">
                <div class="px-7 py-5 bg-gradient-to-r from-red-500/10 to-transparent">
                    <p class="text-xl font-semibold text-white flex items-center gap-2">
                        <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        Zarządzanie kontem
                    </p>
                </div>

                <div class="w-full border-t border-red-500/20"></div>

                <div class="flex flex-col items-start justify-center w-full">
                    <div class="flex items-center justify-between w-full px-7 pt-7">
                        <div class="text-gray-300 flex items-center gap-2">
                            <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            Usuń konto
                        </div>
                        <form method="post" action="{{route('delete.account')}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-medium rounded-xl px-5 py-2.5 text-sm text-center transition-all duration-200 hover:scale-105 border border-red-400/20">
                                Usuń konto
                            </button>
                        </form>
                    </div>
                    <div class="p-7 text-sm text-red-400">
                        <strong>⚠️ Uwaga: ten zabieg jest nieodwracalny</strong>, usunięcie konta wiąże się z utratą wszystkich danych!
                    </div>
                </div>

                <div class="w-full border-t border-red-500/20"></div>

                <div class="flex flex-col items-start justify-center w-full">
                    <div class="flex items-center justify-between w-full px-7 py-7">
                        <div class="text-gray-300 flex items-center gap-2">
                            <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            Wyloguj się
                        </div>
                        <a href="{{ route('logout') }}" class="bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-medium rounded-xl px-5 py-2.5 text-sm text-center transition-all duration-200 hover:scale-105 border border-orange-400/20">
                            Wyloguj się
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
