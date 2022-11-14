<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InputText extends Component
{
    public string $name;

    public string $text;

    public string $placeholder;

    public string $type;

    public function render()
    {
        return view('livewire.input-text');
    }
}
