<?php

namespace App\Http\Livewire\Table;

use App\Models\FeedBack;
use Livewire\Component;

class FeedbackComponent extends Component
{
    public function render()
    {
        $feedbacks = FeedBack::paginate(10);

        return view(
            'livewire.table.feedback-component',
            compact('feedbacks')
        );
    }
}
