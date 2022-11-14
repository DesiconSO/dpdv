<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegistrationScreen extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.registration-screen');
    }

    public function submit()
    {
        dd('teste');
    }
}
