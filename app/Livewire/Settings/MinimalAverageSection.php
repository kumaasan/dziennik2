<?php

namespace App\Livewire\Settings;

use Livewire\Attributes\Rule;
use Livewire\Component;

class MinimalAverageSection extends Component
{
    public $showForm = false;
    public $showData = true;
    #[Rule(['required', 'numeric', 'min:0', 'max:5'])]
    public $average;

    public function updateAverage(){
        $user = auth()->user();
        if(is_null($this->average)){
            $this->average = null;
        }
        $user->minimal_average = $this->average;
        $user->save();
        $this->toggleForm();
    }
    public function toggleForm(){
        $this->showForm = !$this->showForm;
        $this->showData = !$this->showData;
    }

    public function mount(){
        $this->average = auth()->user()->minimal_average;
    }
    public function render()
    {
        return view('livewire.settings.minimal-average-section');
    }
}
