<div class="border border-accent w-full rounded-xl">
    <p class="text-xl py-5 font-semibold px-7">Informacje o koncie</p>

    <div class="w-full border-t border-accent"></div>

    <div class="flex flex-col items-start justify-center w-full">
        <div class="flex items-center justify-between w-full px-7 pt-7">
            <div>Adres email</div>
            @if($showEmailForm)
                <form>
                    <input wire:model="email" class="border-2 pl-0.5 rounded-md dark:text-white text-black" type="text">
                    @error('average') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </form>
            @endif
            @if($showEmailData)
            <div>{{ $markedEmail }}</div>
            @endif
        </div>
        <div class="p-7 text-sm text-[#767675] dark:text-gray-500">Jeśli potrzebujesz zmienić swój adres email, kliknij
            @if(!$showEmailForm)
                <a wire:click="toggleForm" class="text-blue-600 dark:text-blue-400 hover:underline text-sm">tutaj</a>
            @else
                <a wire:click="updateEmail({{ auth()->user()->id }})" class="text-blue-600 dark:text-blue-400 hover:underline text-sm">zapisz</a>
            @endif

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