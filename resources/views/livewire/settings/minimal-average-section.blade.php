<div class="flex flex-col items-start justify-center w-full">
    <div class="flex items-center justify-between w-full px-7 pt-7">
        <div class="text-gray-300">Minimalna średnia</div>
        @if($showForm)
            <div>
                <form>
                    <input placeholder="np: 1.75" wire:model="average" class="bg-white/5 border border-white/20 rounded-xl px-3 py-2 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500/50 transition-all backdrop-blur-xl w-32" step="0.05" type="number">
                    @error('average') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                </form>
            </div>
        @endif
        @if($showData)
            <div class="text-white font-semibold">
                {{ auth()->user()?->minimal_average ?: 'nie podano' }}
            </div>
        @endif
    </div>

    <div class="p-7 text-sm text-gray-400">
        *<strong class="underline text-gray-300">Minimalna średnia</strong> oznacza średnią minimalną, pozwalającą na zaliczenie przedmiotu. Aby zmienić, kliknij
        @if($showData)
            <a wire:click="toggleForm()" class="text-blue-400 hover:text-blue-300 hover:underline cursor-pointer transition-colors">tutaj</a>
        @else
            <a wire:click="updateAverage" class="text-emerald-400 hover:text-emerald-300 hover:underline cursor-pointer transition-colors">zapisz</a>
        @endif
    </div>
</div>
