<form wire:submit.prevent="create" method="post">
    @csrf
    <div class="space-y-5">
        <div class="space-y-2">
            <label class="block text-sm font-medium mb-2 text-gray-300">Nazwa</label>
            <input
                    wire:model="name"
                    type="text"
                    class="w-full px-4 py-3 border border-white/10 rounded-xl bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500/50 backdrop-blur-xl transition-all
                    @error('name') ring-2 ring-red-500/50 border-red-500/50
                    @enderror
                    @if($success) ring-2 ring-emerald-500/50 border-emerald-500/50 @endif"
                    placeholder="Zadanie domowe"/>
            @error('name')
            <p class="text-red-400 text-xs mt-2 flex items-center gap-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="space-y-2">
            <label class="block text-sm font-medium mb-2 text-gray-300">Opis</label>
            <textarea wire:model="description" placeholder="Opis do zadania z..." class="w-full px-4 py-3 border border-white/10 rounded-xl bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500/50 backdrop-blur-xl transition-all"></textarea>
        </div>

        <div class="space-y-2">
            <label class="block text-sm font-medium mb-2 text-gray-300">Termin wykonania</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
                        <path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/>
                        <path d="M3 10h18"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/>
                    </svg>
                </div>
                <input
                        wire:model="due_to"
                        type="date"
                        class="w-full pl-12 pr-4 py-3 border border-white/10 rounded-xl bg-white/5 text-gray-400 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500/50 backdrop-blur-xl transition-all
        [&::-webkit-calendar-picker-indicator]:opacity-0 [&::-webkit-calendar-picker-indicator]:absolute [&::-webkit-calendar-picker-indicator]:w-full [&::-webkit-calendar-picker-indicator]:h-full [&::-webkit-calendar-picker-indicator]:cursor-pointer
        [&::-webkit-datetime-edit-text]:text-gray-400 [&::-webkit-datetime-edit-month-field]:text-gray-400 [&::-webkit-datetime-edit-day-field]:text-gray-400 [&::-webkit-datetime-edit-year-field]:text-gray-400
        @error('due_date') ring-2 ring-red-500/50 border-red-500/50 @enderror"
                        placeholder="Wybierz datę"/>

            </div>
            @error('due_to')
            <p class="text-red-400 text-xs mt-2 flex items-center gap-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                {{ $message }}
            </p>
            @enderror
        </div>

        <div x-data="{ show: false }"
             x-on:added-new-task.window="show = true; setTimeout(() => show = false, 1000)">
            <p x-show="show" x-transition class="text-emerald-400 font-semibold text-sm mt-2 flex items-center gap-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Dodano przedmiot
            </p>
        </div>

        <div>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-medium py-3 rounded-xl transition-all duration-200 hover:scale-[1.01]">
                Dodaj przedmiot
            </button>
        </div>
    </div>
</form>
