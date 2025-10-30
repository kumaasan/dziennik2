<div class="flex flex-col items-start justify-center w-full">
    <div class="flex items-center justify-between w-full px-7 pt-7">
        <div>
            Minimalna średnia:
        </div>
        @if($showForm)
            <div>
                <form>
                    <input placeholder="np: 1.75"  wire:model="average" class="border-2 pl-0.5 rounded-md dark:text-white text-black " type="number">
                    @error('average') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </form>
            </div>
        @endif
        @if($showData)
            <div>
                <strong>{{ auth()->user()?->minimal_average ? : ' nie podano'  }}</strong>
            </div>
        @endif

    </div>

    <div class="p-7 text-sm text-[#767675] dark:text-gray-500">
        *<strong class="underline">Minimalna średnia</strong> oznacza średnią minimalną, pozwalającą na zaliczenie przedmiotu, aby zmienić, kilknij
        <a wire:click="toggleForm()" class="text-blue-600 dark:text-blue-400 hover:underline text-sm">
        @if($showData) <button class="hover:underline"> tutaj</button>
            @else
                <button type="submit" wire:click="updateAverage" class="hover:underline"> zapisz</button>
            @endif
        </a>
    </div>
</div>
