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

        <div class="flex w-full border-2 border-white">
            <div class="grid grid-cols-2 gap-5 w-full">
                @foreach($user->subjects as $subject)
                    <div class="bg-red-500 text-white">{{ $subject->name }}</div>
                    <p>
                        @foreach($subject->grade as $grade)
                            {{$grade->grade}}
                        @endforeach
                    </p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
