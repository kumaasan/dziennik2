<form wire:submit.prevent="addSubject" method="post">
    @csrf
    <div class="space-y-5">
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Nazwa przedmiotu</label>
            <input
                wire:model="name"
                type="text"
                class="w-full px-4 py-2 border border-border rounded-lg bg-white dark:bg-[#1f1f22] text-black dark:text-white  focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all @error('name') ring-2 ring-red-500 dark:border-red-500 border-red-500 focus:ring-red-500 dark:focus:ring-red-500 focus:border-red-500 dark:focus:border-red-500 @enderror @if($success) ring-2 ring-green-500 border-green-500 focus:ring-green-500 focus:border-green-500 @endif"
                placeholder="Matematyka"
            />
            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            <div
                x-data="{ show: false }"
                x-on:subject-added.window="show = true; setTimeout(() => show = false, 1000)">
                <p x-show="show" class="text-green-500 font-bold text-xs mt-1">Dodano przedmiot</p>
            </div>

        </div>
        <div>
            <button type="submit" class="w-full bg-[#a6a6a6] hover:bg-[#c8c8c8] text-primary-content font-medium py-2.5 rounded-lg transition-colors">
                Dodaj przedmiot
            </button>
        </div>
    </div>
</form>
