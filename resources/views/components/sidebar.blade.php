<!-- toggle button in general -->
<div x-data="{ open: false }" class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
    <div
        x-show="open || !open"
        x-transition
        @click.away="if(open) open = false"
        :class="open ? 'fixed top-4 left-[calc(100%-48px)] z-50' : 'fixed top-4 left-4 z-50'"
        class="lg:hidden">

        <button @click.stop="open = !open" class="p-2 rounded text-[#F0F0F3] dark:text-black bg-gray-600 dark:bg-[#A6A6A6]">
            <template x-if="!open">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                </svg>
            </template>
            <template x-if="open">
                <!-- X icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </template>
        </button>
    </div>
    <!-- Backdrop -->
    <div
        x-show="open"
        x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed flex inset-0 dark:bg-black/60 bg-black/70"></div>

    <!-- Off-canvas button and off-canvas sidebar -->
    <div
        x-show="open"
        x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 flex lg:hidden">
        <div
            x-transition:enter="transform transition ease-in-out duration-500"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-500"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="relative mr-16 flex w-full max-w-xs flex-1">
            <x-off-canvas-sidebar/>
        </div>
    </div>
</div>

<!-- sidebar for desktop -->
<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <x-off-canvas-sidebar/>
</div>
