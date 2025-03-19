@props(['active' => false])

@php
    $class = "transition-colors duration-300 py-5";
    $activeTrue = "text-orange border-t-2 border-orange hover:text-orange/90 hover:border-t-2 hover:border-orange/90";
    $activeFalse = "border-t-2 border-transparent hover:text-orange hover:border-t-2 hover:border-orange"

@endphp

<a class="{{ $active ? $activeTrue: $activeFalse }} {{ $class }}" 
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
>{{ $slot }}</a>