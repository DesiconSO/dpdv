<?php

namespace App\Http\Livewire\Components;

use App\Models\User;
use Livewire\Component;

class PopupComponent extends Component
{
    public $text;
    public User $userData;

    public function render()
    {
        return view('livewire.components.popup-component');
    }
}
