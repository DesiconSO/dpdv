<?php

declare(strict_types=1);

namespace App\View\Components\categories;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Content extends Component
{
    public array $categories;

    public function __construct($categories)
    {
        $this->categories = $categories;
    }

    public function render(): View|string|Closure
    {
        return view('components.categories.content');
    }
}
