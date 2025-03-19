@props(['options' => [], 'name' => 'opcion', 'selected' => null, 'label' => $name])

<div class="space-y-2">
    <x-forms.label :name="$name" :label="$label"></x-forms.label>
    <select name="{{ $name }}" id="{{ $name }}" class="w-full p-2 border border-white/10 bg-black text-white rounded-md focus:ring-orange focus:border-orange transition-colors duration-300">
        @foreach ($options as $option)
            <option value="{{ $option }}" @if ($selected === $option) selected @endif>
                {{ ucfirst($option) }}
            </option>
        @endforeach
    </select>
</div>
