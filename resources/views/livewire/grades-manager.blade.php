<div class="flex flex-col gap-8 w-full">
    @foreach($subjects as $subject)
        <div class="flex lg:flex-row flex-col lg:gap-8 gap-4 w-full">
            <div class="flex-[1.5] bg-[#f0f0f3] dark:bg-[#303035] border-2 border-black dark:border-white p-8 rounded-xl">
                <div class="grid grid-cols-2 gap-5 w-full">
                    <div class="flex flex-col flex-wrap items-start justify-start gap-y-4">
                        <div class="text-black dark:text-white text-xl capitalize">{{ $subject->name }}</div>
                        <div class="text-black dark:text-white text-xl">Średnia: {{ $subject->average }} </div>
                    </div>
                    <div class="flex flex-wrap items-center justify-start gap-2">
                        @foreach($grades[$subject->id] ?? [] as $grade)
                            <div class="rounded-full border-2 border-black dark:border-white p-2 text-black dark:text-white">
                                {{ $grade->grade }} <!--(waga: {{ $grade->weight }}) -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="flex-[1] bg-[#f0f0f3] dark:bg-[#303035] border-2 border-black dark:border-white p-8 rounded-xl">
                <p class="text-xl text-center">Dodaj oceny</p>
                <form wire:submit.prevent="addGrade({{ $subject->id }})" class="flex flex-col gap-5">
                    <div>
                        <label class="block text-sm font-medium mb-1">Ocena</label>
                        <input wire:model="grade"
                               type="number"
                               min="1"
                               max="6"
                               class="w-full px-4 py-2 border rounded" placeholder="Np: 5" />
                        @error('grade') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">Waga</label>
                        <input wire:model="weight"
                               type="number"
                               min="1"
                               max="6"
                               class="w-full px-4 py-2 border rounded" placeholder="Np: 2" />
                        @error('weight') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit"
                            class="w-full bg-gray-400 hover:bg-gray-500 text-white font-medium py-2 rounded">
                        Dodaj
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>
