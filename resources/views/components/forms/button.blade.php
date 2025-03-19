@php
    $class= "bg-orange rounded py-2 px-6 font-bold hover:bg-orange/90 transition-colors duration-300"
@endphp

<button class="{{ $class }}" {{ $attributes }}>{{ $slot }}</button>