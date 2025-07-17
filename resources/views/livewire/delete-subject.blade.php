<form wire:submit.prevent="deleteSubject" method="post">
    @csrf
    <div class="space-y-5">
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Nazwa przedmiotu do usunięcia</label>
            <select wire:model="subjectId" class="w-full">
                @foreach($subjects as $name => $id)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror<div
                x-data="{ show: false }"
                x-on:subject-deleted.window="show = true; setTimeout(() => show = false, 1000)">
                <p x-show="show" class="text-green-500 font-bold text-xs mt-1">Usunięto przedmiot</p>
            </div>
        </div>
        <div>
            <button type="submit" class="w-full bg-[#a6a6a6] hover:bg-[#c8c8c8] text-primary-content font-medium py-2.5 rounded-lg transition-colors">
                Usuń przedmiot
            </button>
        </div>
    </div>
</form>
