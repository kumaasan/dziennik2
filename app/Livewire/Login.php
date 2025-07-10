<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule(['required', 'string', 'email', 'max:255', 'exists:users,email'])]
    public $email = '';

    #[Rule(['required', 'string', 'min:6'])]
    public $password = '';

    #[Rule(['boolean'])]
    public $rememberMe = false;


    public function updated($property){
        $this->validateOnly($property);
    }
    public function login(){
        $validated = $this->validate();

        $credentials = [
            'email' => $validated['email'],
            'password' => $validated['password'],
        ];

        auth()->attempt($credentials, $this->rememberMe);

        redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
