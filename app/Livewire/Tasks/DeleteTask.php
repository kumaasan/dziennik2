<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Attributes\Rule;
use Livewire\Component;

class DeleteTask extends Component
{
    #[Rule(['required', 'exists:tasks,id'])]
    public $taskId;
    public function deleteTask(){
        $validated = $this->validate();

        $task = Task::findOrFail($validated['taskId']);
        $task->delete();
    }
    public function render()
    {
        return view('livewire.tasks.delete-task', [
          'tasks' => Task::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
