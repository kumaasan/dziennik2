<div class="min-h-screen w-full flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-[#303036] border-white border-1 shadow-[0px_10px_15px_18px_rgba(255,_255,_255,_0.1)] p-8 rounded-xl">
        <h2 class="text-2xl font-bold mb-6 text-center">Logowanie</h2>

        <form wire:submit.prevent="login" class="space-y-4">
            <div>
                <label class="block text-sm font-medium mb-1">Email</label>
                <input
                    wire:model.live="email"
                    type="email"
                    class="w-full px-4 py-2 border border-border rounded-lg bg-white dark:bg-[#1f1f22] text-black dark:text-white  focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all @error('email') ring-2 ring-red-500 dark:border-red-500 border-red-500 focus:ring-red-500 dark:focus:ring-red-500 focus:border-red-500 dark:focus:border-red-500 @enderror"
                    placeholder="twoj@email.com"
                />
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Hasło</label>
                <input
                    wire:model.live="password"
                    type="password"
                    class="w-full px-4 py-2 border border-border rounded-lg bg-white dark:bg-[#1f1f22] text-black dark:text-white  focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all @error('password') ring-2 ring-red-500 dark:border-red-500 border-red-500 focus:ring-red-500 dark:focus:ring-red-500 focus:border-red-500 dark:focus:border-red-500 @enderror"
                    placeholder="••••••••"
                />
                @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input wire:model="rememberMe" type="checkbox" class="rounded border-border focus:ring-primary"/>
                    <span class="ml-2 text-sm ">Zapamiętaj mnie</span>
                </label>
                <a href="#" class="text-sm hover:hover:underline">Resetuj hasło</a>
            </div>

            <button type="submit" class="w-full bg-[#a6a6a6] hover:bg-[#c8c8c8] text-primary-content font-medium py-2.5 rounded-lg transition-colors">
                Zaloguj się
            </button>
        </form>

        <div class="mt-6 text-center text-sm ">
            Nie masz konta?
            <a href="{{ route('register') }}" class="text-blue-600 dark:text-blue-400 hover:underline font-medium">Zarejestruj się</a>
            <a href="{{ route('test') }}" class="text-blue-600 dark:text-blue-400 hover:underline font-medium">Zarejestruj się</a>
        </div>
    </div>
</div>
