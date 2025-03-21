@props(['name', 'label'])

<div class="col-span-full">
    <x-forms.label :name="$name" :label="$label"/>
    <div class="mt-2">
        <textarea name="{{ $name }}" id="{{ $name }}" rows="3" class="block w-full rounded-md bg-white/10 px-3 py-1.5 text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-white/25 focus:outline-2 focus:-outline-offset-2 sm:text-sm/6">{{ $slot }}</textarea>
    </div>
</div>