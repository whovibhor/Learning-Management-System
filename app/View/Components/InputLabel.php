<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputLabel extends Component
{
    public function __construct(
        public string $for = '',
        public string $value = ''
    ) {}

    public function render()
    {
        return view('components.input-label');
    }
}
