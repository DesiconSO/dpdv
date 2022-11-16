<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ButtonDefault extends Component
{
    public string $text;

    public ?string $link = null;

    public function render()
    {
        return view('livewire.button-default');
    }
}
