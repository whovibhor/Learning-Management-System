<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextInput extends Component
{
    public function __construct(
        public string $type = 'text',
        public string $name = '',
        public ?string $value = null,
        public bool $required = false,
        public bool $autofocus = false,
        public string $autocomplete = ''
    ) {}

    public function render()
    {
        return view('components.text-input');
    }
}
