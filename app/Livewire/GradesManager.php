<?php

namespace App\Livewire;

use App\Models\Grade;
use App\Models\Subject;
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

        $this->calculateAverage($id);

        $this->reset();
        $this->dispatch('$refresh');
    }

    public function calculateAverage($id)
    {
        $grades = Grade::where('subject_id', $id)->get();

        if ($grades->isEmpty()) {
            $subject = Subject::findOrFail($id);
            $subject->average = 0;
            $subject->save();
            return 0;
        }

        $sumWeighted = $grades->sum(fn($g) => $g->grade * $g->weight);
        $sumWeights = $grades->sum('weight');
        $average = $sumWeighted / $sumWeights;

        $subject = Subject::findOrFail($id);
        $subject->average = $average;
        $subject->save();

        return $average;
    }


    public function showGradeDetails($gradeId){
        $grade = Grade::findOrFail($gradeId);

        $this->dispatch('show-grade-details', [
          'grade' => $grade->grade,
          'weight' => $grade->weight,
        ]);
    }
    public function render(){
        $subjects = app(SubjectService::class)->getSubjects(auth()->id());
        $grades = app(GradeService::class)->getUserGrades(auth()->id())->groupBy('subject_id');

        return view('livewire.grades-manager', compact('subjects', 'grades'));
    }
}
