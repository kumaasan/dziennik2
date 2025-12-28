<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AddTask extends Component
{
    #[Rule(['required', 'string', 'max:255', 'min:3', 'unique:tasks,name'])]
    public $name;
    #[Rule(['required', 'string', 'max:255', 'min:3'])]
    public $description;
//    #[Rule('nullable|date|after_or_equal:today')]
    #[Rule(['required', 'date', 'after_or_equal:today'])]
    public $due_to;
    public $success = false;

    public function create(){
        $validated = $this->validate();

        $task = new Task();
        $task->name = $validated['name'];
        $task->description = $validated['description'];
        $task->due_to = $validated['due_to'];
        $task->user_id = auth()->user()->id;
        $task->save();

        $this->dispatch('added-new-task');
        $this->reset();
    }
        

    public function render()
    {
        return view('livewire.tasks.add-task');
    }
}
