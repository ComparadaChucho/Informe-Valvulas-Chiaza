@props(['name', 'label'])

<div class="flex flex-col space-y-2">
    <x-forms.label :name="$name" :label="$label" />
    <input type="date" id="{{ $name }}" name="{{ $name }}" 
        class="bg-white/10 text-white border border-white/10 rounded-lg px-4 py-2">
</div>