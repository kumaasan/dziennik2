<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $password = '';
    public $rememberMe = false;

    public function login(){
        dd($this->all());
    }
    public function render()
    {
        return view('livewire.login');
    }
}
