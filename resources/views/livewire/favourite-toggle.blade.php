<div wire:click="toggleFavorite" class="cursor-pointer">
    @if ($subject->favorite)
        <span class="text-yellow-400 text-xl">★</span>
    @else
        <span class="text-gray-400 text-xl">☆</span>
    @endif
</div>
