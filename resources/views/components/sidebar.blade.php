<flux:sidebar sticky stashable class="w-64 bg-zinc-50 dark:bg-zinc-900 border-r rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />
    <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="logo" class="px-2 dark:hidden" />
    <flux:brand href="{{ route('home') }}" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Dziennik2" class="px-2 hidden dark:flex" />
    <flux:navlist variant="outline">
        <flux:navlist.item icon="home" href="#" current>Strona główna</flux:navlist.item>
        <flux:navlist.item icon="inbox" badge="12" href="#">Inbox</flux:navlist.item>
        <flux:navlist.item icon="document-text" href="#">Documents</flux:navlist.item>
        <flux:navlist.item icon="calendar" href="#">Calendar</flux:navlist.item>
        <flux:navlist.group expandable heading="Favorites" class="grid">
            <flux:navlist.item href="#">Marketing site</flux:navlist.item>
            <flux:navlist.item href="#">Android app</flux:navlist.item>
            <flux:navlist.item href="#">Brand guidelines</flux:navlist.item>
        </flux:navlist.group>
    </flux:navlist>
    <flux:spacer />
    <flux:navlist variant="outline">
        <flux:navlist.item icon="cog-6-tooth" href="#">Settings</flux:navlist.item>
        <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
        @guest
            <flux:navlist.item icon="user-circle" href="{{ route('login') }}">Zaloguj sie</flux:navlist.item>
        @endguest
        @auth
            <flux:navlist.item icon="user-circle" href="{{ route('login') }}">Wyloguj się</flux:navlist.item>
        @endauth
    </flux:navlist>
    @guest
        <flux:profile avatar="https://fluxui.dev/img/demo/user.png" name="Olivia Martin"/>
        <flux:menu>
            <flux:menu.item icon="arrow-right-start-on-rectangle"><a href="{{route('login')}}"> Zaloguj się</a></flux:menu.item>
        </flux:menu>
    @endguest
</flux:sidebar>
