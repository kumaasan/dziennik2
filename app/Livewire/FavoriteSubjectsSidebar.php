<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class FavoriteSubjectsSidebar extends Component {

    public $favSubjects;

    public function mount(){
        $this->favSubjects = auth()->user()?->favouriteSubjects ?? collect();
    }

    #[On('favorite-updated')]
    public function refresh($favSubjects){
        $this->favSubjects = collect($favSubjects ?? []);
    }

    public function render(){
        return view('livewire.favorite-subjects-sidebar', [
          'favSubjects' => $this->favSubjects,
        ]);
    }
}
