@props(['type' => 'text', 'name' => '', 'value' => null, 'required' => false, 'autofocus' => false, 'autocomplete' => ''])

<input
    type="{{ $type }}"
    name="{{ $name }}"
    value="{{ $value ?? '' }}"
    {{ $required ? 'required' : '' }}
    {{ $autofocus ? 'autofocus' : '' }}
    autocomplete="{{ $autocomplete }}"
    {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}
>
