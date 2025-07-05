<div class="min-h-screen w-full flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-[#303036] border-white border-1 shadow-[0px_10px_15px_18px_rgba(255,_255,_255,_0.1)] p-8 text-copy rounded-xl">
        <h2 class="text-2xl font-bold mb-6 text-center">Zaloguj się</h2>

        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-copy-light mb-1">Email</label>
                <input
                    type="email"
                    class="w-full px-4 py-2 border border-border rounded-lg bg-background text-copy focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all"
                    placeholder="twoj@email.com"
                />
            </div>

            <div>
                <label class="block text-sm font-medium text-copy-light mb-1">Hasło</label>
                <input
                    type="password"
                    class="w-full px-4 py-2 border border-border rounded-lg bg-background text-copy focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all"
                    placeholder="••••••••"
                />
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" class="rounded border-border text-primary focus:ring-primary"/>
                    <span class="ml-2 text-sm text-copy-light">Zapamiętaj mnie</span>
                </label>
                <a href="#" class="text-sm text-copy-lighter hover:text-copy hover:underline">Resetuj hasło</a>
            </div>

            <button class="w-full bg-[#a6a6a6] hover:bg-[#c8c8c8] text-primary-content font-medium py-2.5 rounded-lg transition-colors">
                Sign In
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-copy-light">
            Nie masz konta?
            <a href="#" class="text-copy-lighter hover:text-copy underline font-medium">Zarejestruj się</a>
        </div>
    </div>
</div>
