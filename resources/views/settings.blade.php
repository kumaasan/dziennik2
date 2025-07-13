@extends('app')

@section('title', 'Ustawienia')

@section('content')
    <div class="flex items-center justify-start flex-col w-full h-dvh lg:pl-8 py-3 gap-y-10">
        <h2 class="font-bold pt-2 text-3xl">Ustawienia</h2>

        <div class="border border-accent w-full rounded-xl">
            <p class="text-xl py-5 font-semibold px-7">Informacje o koncie</p>

            <div class="w-full border-t border-accent"></div>

            <div class="flex flex-col items-start justify-center w-full">
                <div class="flex items-center justify-between w-full px-7 pt-7">
                    <div>Adres email</div>
                    <div>{{ Auth::user()->masked_email }}</div>
                </div>
                <div class="p-7 text-sm text-[#767675] dark:text-gray-500">Jeśli potrzebujesz zmienić swój adres email, kliknij
                    <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline text-sm">tutaj</a>
                </div>
            </div>
            <div class="flex flex-col items-start justify-center w-full">
                <div class="flex items-center justify-between w-full px-7 pb-7">
                    <div>Hasło </div>
                    <div class="not a real password :)">••••••••••</div>
                </div>
                <div class="pb-5 px-7 text-sm text-[#767675] dark:text-gray-500">Jeśli potrzebujesz zmienić swoje hasło, kliknij
                    <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline text-sm">tutaj</a>
                </div>
            </div>
        </div>

        <div class="border border-accent w-full rounded-xl">
            <p class="text-xl py-5 font-semibold px-7">Zarządzanie przedmiotami</p>

            <div class="w-full border-t border-accent"></div>

            <div class="flex flex-col items-start justify-center w-full">
                <div class="flex items-center justify-between w-full px-7 pt-7">
                    <div>Minimalna średnia</div>
                    <div>dummy 1.75</div>
                </div>
                <div class="p-7 text-sm text-[#767675] dark:text-gray-500">*<strong class="underline">Minimalna średnia</strong> oznacza średnią minimalną, pozwalającą na zdanie.
                    <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline text-sm">Zmień ją tutaj</a>
                </div>
            </div>
{{--            dalsza czesc tego carda--}}
        </div>

        <div class="border border-accent w-full rounded-xl">
            <p class="text-xl py-5 font-semibold px-7">Zarządzanie kontem</p>

            <div class="w-full border-t border-accent"></div>
            <div class="flex flex-col items-start justify-center w-full">
                <div class="flex items-center justify-between w-full px-7 pt-7">
                    <div>Usuń konto</div>
                    <form method="post" action="{{route('delete.account')}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-700 hover:text-white border-2 border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-500 dark:focus:ring-red-900 transition-all duration-200">
                            Usuń konto
                        </button>
                    </form>

                </div>
                <div class="p-7 text-sm text-red-500"><strong>Uwaga ten zabieg jest nie odwracalny</strong>, usunięcie konta wiaże się z tym utrada wszystkich danych!</div>
            </div>
            <div class="flex flex-col items-start justify-center w-full">
                <div class="flex items-center justify-between w-full px-7 pb-7">
                    <div>Wyloguj się</div>
                    <a href="{{ route('logout') }}" class="text-red-700 hover:text-white border-2 border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-500 dark:focus:ring-red-900 transition-all duration-200">
                        Wyloguj się
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
