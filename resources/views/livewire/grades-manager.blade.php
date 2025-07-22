<div class="flex flex-col gap-8 w-full">
    @foreach($user->subjects as $subject)
        <div class="flex lg:flex-row flex-col lg:gap-8 gap-4 w-full">
            <div class="flex-[1.5] bg-[#f0f0f3] dark:bg-[#303035] border-2 border-black dark:border-white p-8 rounded-xl">
                <div class="grid grid-cols-2 gap-5 w-full">
                    <div class="flex flex-wrap items-center justify-start gap-2">
                        <div class="text-black dark:text-white text-xl capitalize">{{ $subject->name }}</div>
                    </div>
                    <div class="flex flex-wrap items-center justify-start gap-2">
                        @foreach($subject->grade as $grade)
                            <div class="rounded-full border-2 border-black dark:border-white p-2 text-black dark:text-white">{{ $grade->grade }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="flex-[1] bg-[#f0f0f3] dark:bg-[#303035] border-2 border-black dark:border-white p-8 rounded-xl">
                <p class="text-xl text-center">Dodaj oceny</p>
                <form wire:submit.prevent="addGrade({{ $subject->id }})" class="flex flex-col gap-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium mb-1">Ocena</label>
                        <input
                            wire:model="grade"
                            type="number"
                            class="w-full px-4 py-2 border border-border rounded-lg bg-white dark:bg-[#1f1f22] text-black dark:text-white  focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all @error('email') ring-2 ring-red-500 dark:border-red-500 border-red-500 focus:ring-red-500 dark:focus:ring-red-500 focus:border-red-500 dark:focus:border-red-500 @enderror"
                            placeholder="Np: 5"
                        />
                        @error('grade') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Waga</label>
                        <input
                            wire:model="weight"
                            type="number"
                            class="w-full px-4 py-2 border border-border rounded-lg bg-white dark:bg-[#1f1f22] text-black dark:text-white  focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all @error('email') ring-2 ring-red-500 dark:border-red-500 border-red-500 focus:ring-red-500 dark:focus:ring-red-500 focus:border-red-500 dark:focus:border-red-500 @enderror"
                            placeholder="Np: 5"
                        />
                        @error('weight') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit" class="w-full bg-[#a6a6a6] hover:bg-[#c8c8c8] text-primary-content font-medium py-2.5 rounded-lg transition-colors">
                        Dodaj
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>
