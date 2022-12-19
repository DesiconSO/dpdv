<?php

namespace App\Http\Livewire\Components;

use App\Models\FeedBack;
use Livewire\Component;

class FeedbackComponent extends Component
{
    public $feedbackId;
    public $fromUser;
    public $toUser;
    public $feedback;
    public $likes;

    public function mount(FeedBack $feedback)
    {
        $this->feedbackId = $feedback->id;
        $this->feedback = $feedback->feedback;
        $this->fromUser = $feedback->fromUser->name;
        $this->toUser = $feedback->toUser->name;
        $this->likes = $feedback->likes;
    }

    public function render()
    {
        return view('livewire.components.feedback-component');
    }

    public function like(FeedBack $feedBack)
    {
        $feedBack->likes += 1;
        $this->likes = $feedBack->likes;

        $feedBack->save();
    }


    public function unLike(FeedBack $feedBack)
    {
        $feedBack->likes -= 1;
        $this->likes = $feedBack->likes;

        $feedBack->save();
    }
}
