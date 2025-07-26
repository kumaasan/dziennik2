<?php

namespace App\Livewire;

use App\Models\Grade;
use App\Services\SubjectService;
use Livewire\Attributes\Rule;
use Livewire\Component;

class GradesManager extends Component {

    public $user;
    public $subjects;

    public function mount(SubjectService $subjectService){
        $this->subjects = $subjectService->getUserSubjects(auth()->id());
        dd($this->user->subjects->first()->relationLoaded('grade'));
        //        $this->subjects->load('grade');
    }

    public function render(){
        return view('livewire.grades-manager', [
          'subjects' => $this->subjects,
        ]);
    }
}
