@props(['model' => 0])

@php
    $default = " rounded py-2 px-6 font-bold transition-colors duration-300 ";

    if($model == 0) {
        $class = " bg-orange hover:bg-orange/70 ";
    } else {
        $class = " bg-white/10 hover:bg-white/5 ";
    }
@endphp

<button class="{{ $default . $class }}" {{ $attributes }}>{{ $slot }}</button>