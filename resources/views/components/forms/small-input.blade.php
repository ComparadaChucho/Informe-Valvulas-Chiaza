@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-2 py-1 w-full',
        'value' => old($name)
    ];
@endphp

<div class="mx-2">
    @if ($label)
        <div class="inline-flex items-center gap-x-2">
            <span class="w-2 h-2 bg-orange inline-block rounded-xl"></span>
            <label for="{{ $name }}" class="text-sm font-bold"> {{ $label }}</label>
        </div>
    @endif

    <div class="mt-1">
        <input {{ $attributes($defaults) }}>

        <x-forms.error :error="$errors->first($name)" />
    </div>
</div>

