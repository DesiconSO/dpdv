<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    protected $listeners = ['alertEvent'];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $type = 'success',
        public string $message = '',
        public bool $show = false
    ) {
    }

    public function alertEvent()
    {
        dd('oisss');

        $this->type = $type;
        $this->message = $message;
        $this->show = true;

        $this->setTimer();
    }

    public function setTimer()
    {
        sleep(10);
        $this->show = false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.alert');
    }
}
