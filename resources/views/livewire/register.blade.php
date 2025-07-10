<div class="min-h-screen w-full flex items-center justify-center p-4 bg-white dark:bg-[#27272A]">
    <div class="max-w-md w-full bg-[#f0f0f3] dark:bg-[#303035] border-2 border-black dark:border-white p-8 rounded-xl">

        <h2 class="text-2xl font-bold mb-6 text-center text-black dark:text-white">Rejestrowanie</h2>

        <form wire:submit.prevent="register" class="space-y-4">

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Imię</label>
                <input
                    wire:model.live.debounce.250ms="name"
                    type="text"
                    class="w-full px-4 py-2 border border-border rounded-lg bg-white dark:bg-[#1f1f22] text-black dark:text-white  focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all @error('name') ring-2 ring-red-500 dark:border-red-500 border-red-500 focus:ring-red-500 dark:focus:ring-red-500 focus:border-red-500 dark:focus:border-red-500 @enderror"
                    placeholder="Twoje imię"
                />
                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Email</label>
                <input
                    wire:model.live.debounce.250ms="email"
                    type="email"
                    class="w-full px-4 py-2 border border-border rounded-lg bg-white dark:bg-[#1f1f22] text-black dark:text-white  focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all @error('email') ring-2 ring-red-500 dark:border-red-500 border-red-500 focus:ring-red-500 dark:focus:ring-red-500 focus:border-red-500 dark:focus:border-red-500 @enderror"
                    placeholder="twoj@email.com"
                />
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Hasło</label>
                <input
                    wire:model.live.debounce.250ms="password"
                    type="password"
                    class="w-full px-4 py-2 border border-border rounded-lg bg-white dark:bg-[#1f1f22] text-black dark:text-white  focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all @error('password') ring-2 ring-red-500 dark:border-red-500 border-red-500 focus:ring-red-500 dark:focus:ring-red-500 focus:border-red-500 dark:focus:border-red-500 @enderror"
                    placeholder="••••••••"
                />
                @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Potwierdź hasło</label>
                <input
                    wire:model.live.debounce.250ms="password_confirmation"
                    type="password"
                    class="w-full px-4 py-2 border border-border rounded-lg bg-white dark:bg-[#1f1f22] text-black dark:text-white  focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all @error('password_confirmation') ring-2 ring-red-500 dark:border-red-500 border-red-500 focus:ring-red-500 dark:focus:ring-red-500 focus:border-red-500 dark:focus:border-red-500 @enderror"
                    placeholder="••••••••"
                />
                @error('password_confirmation') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <button
                type="submit"
                class="w-full bg-gray-600 hover:bg-gray-500 dark:bg-[#A6A6A6] dark:hover:bg-[#C8C8C8] text-white dark:text-black font-medium py-2.5 rounded-lg transition-colors"
            >
                Zarejestruj się
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-gray-700 dark:text-gray-300">
            Masz konto?
            <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline  font-medium">Zaloguj się</a>
        </div>
    </div>
</div>
