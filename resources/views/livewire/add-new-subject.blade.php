<form wire:submit.prevent="addSubject" method="post">
    @csrf
    <div class="space-y-5">
        <div>
            <label class="block text-sm font-medium mb-2 text-gray-300">Nazwa przedmiotu</label>
            <input
                    wire:model="name"
                    type="text"
                    class="w-full px-4 py-3 border border-white/10 rounded-xl bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500/50 backdrop-blur-xl transition-all @error('name') ring-2 ring-red-500/50 border-red-500/50 @enderror @if($success) ring-2 ring-emerald-500/50 border-emerald-500/50 @endif"
                    placeholder="Matematyka"
            />
            @error('name')
            <p class="text-red-400 text-xs mt-2 flex items-center gap-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                {{ $message }}
            </p>
            @enderror

            <div
                    x-data="{ show: false }"
                    x-on:subject-added.window="show = true; setTimeout(() => show = false, 1000)">
                <p x-show="show" x-transition class="text-emerald-400 font-semibold text-sm mt-2 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Dodano przedmiot
                </p>
            </div>
        </div>

        <div>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-medium py-3 rounded-xl transition-all duration-200 hover:scale-[1.01]">
                Dodaj przedmiot
            </button>
        </div>
    </div>
</form>
