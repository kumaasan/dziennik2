<?php

namespace App\Livewire;

use App\Models\Grade;
use App\Services\SubjectService;
use Livewire\Attributes\Rule;
use Livewire\Component;

class GradesManager extends Component {

    public $user;

    #[Rule(['required', 'numeric', 'decimal:2', 'min:1', 'max:6'])]
    public $grade;
    #[Rule(['required', 'numeric', 'min:1', 'max:6'])]
    public $weight;

    //    public function addGrade($subjectId){
    //        $validated = $this->validate();
    //
    //        $grade = new Grade();
    //        $grade->subject_id = $subjectId;
    //        $grade->user_id = auth()->user()->id;
    //        $grade->grade = $validated['grade'];
    //        $grade->weight = $validated['weight'];
    //        $grade->save();
    //
    //        $this->reset(['grade', 'weight']);
    //
    //        $this->user = $this->subjectService->getUserWithSubjectsAndGrades(auth()->id());
    //
    //    }

    //    #[On('grade-added')]
    //    public function loadGrades(){
    //        $this->user = app(SubjectService::class)->getUserWithSubjectsAndGrades(auth()->id());
    //    }

    public function mount(SubjectService $subjectService){
        $this->user = $subjectService->getUserWithSubjectsAndGrades(auth()->id());
    }

    public function render(){
        return view('livewire.grades-manager', [
          'user' => $this->user,
        ]);
    }
}
