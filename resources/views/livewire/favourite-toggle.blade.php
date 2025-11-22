<div wire:click="toggleFavorite" class="cursor-pointer">
    @if ($subject->favorite)
       <span class="text-red-500 hover:text-red-500 transition-colors">
               <svg class="size-6 hover:scale-[1.25] transition-all duration-300" fill="currentColor" viewBox="0 0 20 20">
                       <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                </svg>
        </span>
    @else
        <span class="text-slate-500 hover:text-red-700 transition-colors">
               <svg class="size-6 hover:scale-[1.25] transition-all duration-300" fill="currentColor" viewBox="0 0 20 20">
                       <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                </svg>
        </span>
    @endif
</div>
