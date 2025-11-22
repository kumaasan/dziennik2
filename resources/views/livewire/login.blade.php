<div class="min-h-screen w-full flex items-center justify-center p-4 ">


    <div class="relative max-w-md w-full backdrop-blur-xl bg-white/5 border border-white/10 p-8 rounded-2xl shadow-2xl">
        <h2 class="text-3xl font-bold mb-2 text-center text-white">Logowanie</h2>
        <p class="text-gray-400 text-center mb-8">Witaj ponownie! Zaloguj się do swojego konta</p>

        <form wire:submit.prevent="login" class="space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-medium mb-2 text-gray-300">Email</label>
                <input
                        wire:model.live.debounce.500ms="email"
                        type="email"
                        class="w-full px-4 py-3 border border-white/20 rounded-xl bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500/50 backdrop-blur-xl transition-all @error('email') ring-2 ring-red-500/50 border-red-500/50 @enderror"
                        placeholder="twoj@email.com"
                />
                @error('email') <p class="text-red-400 text-xs mt-2 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                    {{ $message }}
                </p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-2 text-gray-300">Hasło</label>
                <input
                        wire:model.live.debounce.100ms="password"
                        type="password"
                        class="w-full px-4 py-3 border border-white/20 rounded-xl bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500/50 backdrop-blur-xl transition-all @error('password') ring-2 ring-red-500/50 border-red-500/50 @enderror"
                        placeholder="••••••••"
                />
                @error('password') <p class="text-red-400 text-xs mt-2 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                    {{ $message }}
                </p> @enderror
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center cursor-pointer group">
                    <input wire:model="rememberMe" type="checkbox" class="w-4 h-4 rounded border-white/20 bg-white/5 text-blue-500 focus:ring-2 focus:ring-blue-500/50 focus:ring-offset-0 transition-all"/>
                    <span class="ml-2 text-sm text-gray-300 group-hover:text-white transition-colors">Zapamiętaj mnie</span>
                </label>
                <a href="#" class="text-sm text-blue-400 hover:text-blue-300 hover:underline transition-colors">Resetuj hasło</a>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-medium py-3 rounded-xl transition-all duration-200  hover:scale-[1.01]">
                Zaloguj się
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-gray-400">
            Nie masz konta?
            <a href="{{ route('register') }}" class="text-blue-400 hover:text-blue-300 hover:underline font-medium transition-colors ml-1">Zarejestruj się</a>
        </div>
    </div>
</div>
