<div>
    @forelse ($favoriteSubjects as $subject)
        <div>
                {{$subject->name}}
        </div>
            @empty
            <p class="text-xl">Brak polubionych przedmiotów</p>
    @endforelse
</div>
