<?php

namespace App\Livewire;

use App\Models\Subject;
use Livewire\Attributes\Rule;
use Livewire\Component;

class DeleteSubject extends Component {

    #[Rule(['required', 'exists:subjects,id'])]
    public $subjectId;

    public $subjects;
    public $success = false;

    protected $listeners = ['subject-added' => 'refreshSubjects'];

    public function mount(){
        $this->subjects  = $this->getAllSubjects();
        $this->subjectId = $this->subjects->first();
    }

    public function getAllSubjects(){
        return Subject::orderBy('name')->pluck('id', 'name');
    }

    public function refreshSubjects(){
        $this->subjects = $this->getAllSubjects();
    }

    public function deleteSubject(){
        $validated = $this->validate();

        $subject = Subject::find($validated['subjectId']);

        if ($subject){
            $subject->delete();
            $this->dispatch('subject-deleted');
            $this->refreshSubjects();
        }
    }

    public function render(){
        return view('livewire.delete-subject');
    }
}
