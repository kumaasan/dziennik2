<div class="sticky top-0 flex h-screen flex-col gap-y-5 overflow-y-auto bg-[#D9D9D9] dark:bg-[#18181B] px-6 pb-4">
    <div class="flex h-16 shrink-0 items-center">
        <p class="text-black dark:text-white">dziennik2</p>
    </div>
    <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
            <li>
                <ul role="list" class="-mx-2 space-y-1">
                    <li>
                        <a href="{{ route('home') }}" class="text-black dark:text-white hover:bg-zinc-200 dark:hover:bg-[#27272A] group flex gap-x-3 rounded-md p-2  leading-6 font-semibold">
                            <svg class="size-7 shrink-0 text-black dark:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            Strona główna
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-black dark:text-white hover:bg-zinc-200 dark:hover:bg-[#27272A] group flex gap-x-3 rounded-md p-2 leading-6 font-semibold">
                            <svg class="size-7 shrink-0 text-black dark:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                            Przedmioty
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-black dark:text-white hover:bg-zinc-200 dark:hover:bg-[#27272A] group flex gap-x-3 rounded-md p-2  leading-6 font-semibold">
                            <svg class="size-7 shrink-0 text-black dark:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                            </svg>
                            Oceny
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-black dark:text-white hover:bg-zinc-200 dark:hover:bg-[#27272A] group flex gap-x-3 rounded-md p-2  leading-6 font-semibold">
                            <svg class="size-7 shrink-0 text-black dark:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            Przypomnienia
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="text-xs font-semibold leading-6 text-black dark:text-white">Przypięte przedmioty</div>
                <ul role="list" class="-mx-2 mt-2 space-y-1">
                    <li>
                        <a href="#" class="text-black dark:text-white hover:bg-zinc-200 dark:hover:bg-[#27272A] group flex gap-x-3 rounded-md p-2  leading-6 font-semibold">
                            <span class="flex size-7 shrink-0 items-center justify-center rounded-lg border border-gray-500 bg-gray-600 text-[0.625rem] font-medium text-white">M</span>
                            <span class="truncate capitalize">Matma</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-black dark:text-white hover:bg-zinc-200 dark:hover:bg-[#27272A] group flex gap-x-3 rounded-md p-2  leading-6 font-semibold">
                            <span class="flex size-7 shrink-0 items-center justify-center rounded-lg border border-gray-500 bg-gray-600 text-[0.625rem] font-medium text-white">H</span>
                            <span class="truncate">Matma</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-black dark:text-white hover:bg-zinc-200 dark:hover:bg-[#27272A] group flex gap-x-3 rounded-md p-2  leading-6 font-semibold">
                            <span class="flex size-7 shrink-0 items-center justify-center rounded-lg border border-gray-500 bg-gray-600 text-[0.625rem] font-medium text-white">P</span>
                            <span class="truncate capitalize">Polski</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-black dark:text-white hover:bg-zinc-200 dark:hover:bg-[#27272A] group flex gap-x-3 rounded-md p-2  leading-6 font-semibold">
                            <span class="flex size-7 shrink-0 items-center justify-center rounded-lg border border-gray-500 bg-gray-600 text-[0.625rem] font-medium text-white">A</span>
                            <span class="truncate capitalize">Angielski</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mt-auto">
                <a href="{{ route('settings') }}" class="group -mx-2 flex gap-x-3 rounded-md p-2  font-semibold leading-6 text-black dark:text-white hover:bg-zinc-200 dark:hover:bg-[#27272A]">
                    <svg class="size-7 shrink-0 text-black dark:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Ustawienia
                </a>
                @auth()
                    <a href="{{ route('logout') }}" class="capitalize group -mx-2 flex gap-x-3 rounded-md p-2 font-semibold leading-6 text-black dark:text-white hover:bg-zinc-200 dark:hover:bg-[#27272A]">
                        <span class="flex size-7 shrink-0 items-center justify-center rounded-lg border border-gray-500 bg-gray-600 text-[0.625rem] font-medium text-white">{{ substr(Auth::user()->name ,0, 1) }}</span>
                        {{Auth::user()->name}}
                    </a>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="capitalize group -mx-2 flex gap-x-3 rounded-md p-2 font-semibold leading-6 text-black dark:text-white hover:bg-zinc-200 dark:hover:bg-[#27272A]">
                        <span class="flex size-7 shrink-0 items-center justify-center rounded-lg border border-gray-500 bg-gray-600 text-[0.625rem] font-medium text-white">{{ substr("Konto gościa" ,0, 1) }}</span>
                        Konto gościa
                    </a>
                @endguest
            </li>
        </ul>
    </nav>
</div>
