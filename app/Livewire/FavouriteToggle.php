<?php

namespace App\Livewire;

use App\Models\Subject;
use Livewire\Component;

class FavouriteToggle extends Component {

    public Subject $subject;

    public function toggleFavorite(){
        $this->subject->favorite = !$this->subject->favorite;
        $this->subject->save();

        $this->dispatch('favorite-updated');
    }


    public function render(){
        return view('livewire.favourite-toggle');
    }
}
