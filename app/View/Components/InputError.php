<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputError extends Component
{
    public function __construct(
        public array $messages = []
    ) {}

    public function render()
    {
        return view('components.input-error');
    }
}
