<?php

namespace App\Livewire;

use App\Models\Subject;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AddNewSubject extends Component {

    #[Rule(['required', 'string', 'max:255', 'min:3', 'unique:subjects,name'])]
    public $name;
    public $success = false;

    public function addSubject(){
        $validated = $this->validate();

        $subject          = new Subject();
        $subject->name    = $validated[',name'];
        $subject->user_id = auth()->user()->id;
        $subject->save();

        $this->dispatch('subject-added');
        $this->reset('name');
    }

    public function render(){
        return view('livewire.add-new-subject');
    }
}
