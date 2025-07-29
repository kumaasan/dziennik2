<?php

namespace App\Livewire;

use App\Models\Grade;
use App\Services\GradeService;
use App\Services\SubjectService;
use Livewire\Attributes\Rule;
use Livewire\Component;

class GradesManager extends Component {


    #[Rule('required', 'decimal:2', 'min:1', 'max:6')]
    public $grade;
    #[Rule('required', 'numeric', 'min:1', 'max:6')]
    public $weight;

    public function addGrade($id){
        $validated = $this->validate();

        $grade = new Grade();
        $grade->user_id = auth()->id();
        $grade->subject_id = $id;
        $grade->grade = $validated['grade'];
        $grade->weight = $validated['weight'];
        $grade->save();

        //        $this->reset(['grade', 'weight']);
        $this->grade = null;
        $this->weight = '';
    }

    public function render(){
        $subjects = app(SubjectService::class)->getSubjects(auth()->id());
        $grades = app(GradeService::class)->getUserGrades(auth()->id())->groupBy('subject_id');

        return view('livewire.grades-manager', compact('subjects', 'grades'));
    }
}
