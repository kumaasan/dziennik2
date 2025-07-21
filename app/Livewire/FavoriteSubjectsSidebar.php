<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class FavoriteSubjectsSidebar extends Component {

    public $favSubjects;

    #[On('favorite-updated')]
    public function loadFavSubjects(){
        $this->favSubjects = auth()->user()->subjects()->where('favorite', true)->get();
    }

    public function mount(){
        $this->loadFavSubjects();
    }

    public function render(){
        return view('livewire.favorite-subjects-sidebar');
    }
}
