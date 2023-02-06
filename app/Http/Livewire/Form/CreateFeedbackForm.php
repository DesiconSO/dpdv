<?php

namespace App\Http\Livewire\Form;

use App\Models\FeedBack;
use Livewire\Component;

class CreateFeedbackForm extends Component
{
    public $to_user;

    public $feedback;

    public function render()
    {
        return view('livewire.form.create-feedback-form');
    }

    public function submit()
    {
        $this->validate([
            'to_user' => 'required|exists:users,id',
            'feedback' => 'required|string',
        ]);

        FeedBack::create([
            'from_user' => auth()->id(),
            'to_user' => $this->to_user,
            'feedback' => $this->feedback,
        ]);

        return redirect()->route('feedback.index')->with('success', __('Feedback created successfully'));
    }
}
