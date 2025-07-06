<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

    #[Rule(['required_with:password', 'string', 'min:8'])]
    public $password_confirmation;


    public function updated($property)
    {
        if (in_array($property, ['password', 'password_confirmation'])) {
            $this->validateOnly('password');
            $this->validateOnly('password_confirmation');
        } else {
            $this->validateOnly($property);
        }
    }

    public function register()
    {
       $validated = $this->validate();

       $user = new User();
       $user->name = $validated['name'];
       $user->email = $validated['email'];;
       $user->password = Hash::make($validated['password']);
       $user->save();

       auth()->login($user);

       redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
