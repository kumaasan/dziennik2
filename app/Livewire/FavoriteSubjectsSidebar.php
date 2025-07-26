<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class FavoriteSubjectsSidebar extends Component {

    #[On('favorite-updated')]
    public function refresh(){}

    public function render(){
        $favSubjects = auth()->user()->subjects()->where('favorite', true)->get();

        return view('livewire.favorite-subjects-sidebar', compact('favSubjects'));
    }
}
