<?php

namespace App\Livewire\Settings;

use App\Models\User;
use Livewire\Component;

class AccountSection extends Component
{
    public $showEmailForm = false;
    public $showEmailData = true;
    public $markedEmail;
    public $email;

    public function mount()
    {
        $user = auth()->user();
        $this->markedEmail = $user->masked_email;
        $this->email = $user->email;
    }

    public function toggleForm()
    {
        $this->showEmailForm = !$this->showEmailForm;
        $this->showEmailData = !$this->showEmailData;
    }

    public function updateEmail($id)
    {
        $user = User::findOrFail($id);
        $user->email = $this->email;
        $user->save();

        $this->markedEmail = $user->masked_email;

        $this->toggleForm();
    }

    public function render()
    {
        return view('livewire.settings.account-section');
    }
}
