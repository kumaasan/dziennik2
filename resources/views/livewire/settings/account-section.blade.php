<div class="backdrop-blur-xl bg-white/5 border border-white/10 w-full rounded-2xl overflow-hidden">
    <div class="px-7 py-5 bg-gradient-to-r from-white/5 to-transparent">
        <p class="text-xl font-semibold text-white">Informacje o koncie</p>
    </div>

    <div class="w-full border-t border-white/10"></div>

    <div class="flex flex-col items-start justify-center w-full">
        <div class="flex items-center justify-between w-full px-7 pt-7">
            <div class="text-gray-300">Adres email</div>
            @if($showEmailForm)
                <form>
                    <input wire:model="email" class="bg-white/5 border border-white/20 rounded-xl px-3 py-2 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500/50 transition-all backdrop-blur-xl" type="text">
                    @error('email') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                </form>
            @endif
            @if($showEmailData)
                <div class="text-white font-medium">{{ $markedEmail }}</div>
            @endif
        </div>
        <div class="p-7 text-sm text-gray-400">
            Jeśli potrzebujesz zmienić swój adres email, kliknij
            @if(!$showEmailForm)
                <a wire:click="toggleForm" class="text-blue-400 hover:text-blue-300 hover:underline cursor-pointer transition-colors">tutaj</a>
            @else
                <a wire:click="updateEmail({{ auth()->user()->id }})" class="text-emerald-400 hover:text-emerald-300 hover:underline cursor-pointer transition-colors">zapisz</a>
            @endif
        </div>
    </div>

    <div class="flex flex-col items-start justify-center w-full">
        <div class="flex items-center justify-between w-full px-7 pb-7">
            <div class="text-gray-300">Hasło</div>
            <div class="text-gray-500">••••••••••</div>
        </div>
        <div class="pb-5 px-7 text-sm text-gray-400">
            Jeśli potrzebujesz zmienić swoje hasło, kliknij
            <a href="#" class="text-blue-400 hover:text-blue-300 hover:underline transition-colors">tutaj</a>
        </div>
    </div>
</div>
