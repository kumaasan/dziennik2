<form wire:submit.prevent="deleteSubject" method="post">
    @csrf
    <div class="space-y-5">
        <div>
            <label class="block text-sm font-medium mb-2 text-gray-300">Nazwa przedmiotu do usunięcia</label>
            <select
                    wire:model="subjectId"
                    class="w-full px-4 py-3 border border-white/10 rounded-xl bg-white/5 text-white focus:outline-none focus:ring-2 focus:ring-red-500/50 focus:border-red-500/50 backdrop-blur-xl transition-all cursor-pointer">
                <option value="" class="bg-slate-800 text-gray-400">Wybierz przedmiot</option>
                @foreach($subjects as $name => $id)
                    <option value="{{ $id }}" class="bg-slate-800 text-white">{{ $name }}</option>
                @endforeach
            </select>

            @error('subjectId')
            <p class="text-red-400 text-xs mt-2 flex items-center gap-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                {{ $message }}
            </p>
            @enderror

            <div
                    x-data="{ show: false }"
                    x-on:subject-deleted.window="show = true; setTimeout(() => show = false, 1000)">
                <p x-show="show" x-transition class="text-emerald-400 font-semibold text-sm mt-2 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Usunięto przedmiot
                </p>
            </div>
        </div>

        <div>
            <button type="submit" class="w-full bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-medium py-3 rounded-xl transition-all duration-200  hover:scale-[1.01]">
                Usuń przedmiot
            </button>
        </div>
    </div>
</form>
