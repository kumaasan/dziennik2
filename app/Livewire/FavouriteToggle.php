<?php

namespace App\Livewire;

use App\Models\Subject;
use Livewire\Component;

class FavouriteToggle extends Component {

    public Subject $subject;

    public function toggleFavorite(){
        $this->subject->favorite = !$this->subject->favorite;
        $this->subject->save();

        $favSubjects = auth()->user()->favouriteSubjects()->select('id', 'name')->get()->toArray();

        $this->dispatch('favorite-updated', $favSubjects);
    }


    public function render(){
        return view('livewire.favourite-toggle');
    }
}
