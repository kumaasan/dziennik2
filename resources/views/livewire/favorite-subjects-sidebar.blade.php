<ul role="list" class="-mx-2 mt-2 space-y-1">
    @forelse($favSubjects as $subject)
        <li>
            <a href="#" class="text-white hover:bg-white/10 group flex gap-x-3 rounded-xl p-3 leading-6 font-semibold transition-all duration-200">
                <span class="flex size-7 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-gray-600 to-gray-700 border border-white/10 text-[0.625rem] font-bold text-white shadow-lg uppercase">
                    {{ substr($subject['name'], 0, 1) }}
                </span>
                <span class="truncate capitalize">{{ $subject['name'] }}</span>
            </a>
        </li>
    @empty
        <li class="text-gray-400 text-sm px-2 pt-4 italic">Brak polubionych przedmiotów</li>
    @endforelse
</ul>
