<ul role="list" class="-mx-2 mt-2 space-y-1">
    @forelse($favSubjects as $subject)
        <li>
            <a href="#" class="text-black dark:text-white hover:bg-zinc-200 dark:hover:bg-[#27272A] group flex gap-x-3 rounded-md p-2 leading-6 font-semibold">
                    <span class="flex size-7 shrink-0 items-center justify-center rounded-lg border border-gray-500 bg-gray-600 text-[0.625rem] font-medium text-white">
                        {{ strtoupper(substr($subject['name'], 0, 1)) }}
                    </span>
                <span class="truncate capitalize">{{ $subject['name'] }}</span>
            </a>
        </li>
    @empty
        <li class="text-gray-500 dark:text-gray-400 text-sm px-2 pt-4">Brak polubionych przedmiotów</li>
    @endforelse
</ul>
