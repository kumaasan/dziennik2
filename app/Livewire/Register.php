<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class Register extends Component
{
    #[Rule(['required', 'string', 'max:255', 'min:3'])]
    public $name;

    #[Rule(['required', 'string', 'email', 'max:255', 'unique:users,email'])]
    public $email;

    #[Rule(['required', 'string', 'min:8', 'confirmed'])]
    public $password;

    public $password_confirmation;

    public function updated($property)
    {
        $this->validateOnly($property);

        if ($property === 'password_confirmation') {
            if ($this->password !== $this->password_confirmation) {
                $this->addError('password_confirmation', 'Hasła się nie zgadzają.');
            } else {
                $this->resetErrorBag('password_confirmation');
            }
        }
    }

    public function register()
    {
        $this->validate();

    }

    public function render()
    {
        return view('livewire.register');
    }
}
