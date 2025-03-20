@props(['options' => [], 'name' => 'opciones', 'selected' => [], 'flex' => 'inline-flex'])

<div class="space-y-2">
    @foreach ($options as $option)
        <label class="{{ $flex }} items-center space-x-2 cursor-pointer group">
            <input type="checkbox" name="{{ $name }}[]" value="{{ $option }}" 
                class="hidden peer" 
                @if (in_array($option, (array) $selected)) checked @endif>
            <div class="w-5 h-5 rounded-md border-2 border-white/10 peer-checked:bg-orange group-hover:border-white/20 group-hover:bg-orange/80 transition-colors duration-300"></div>
            <span class="text-white">{{ $option }}</span>
        </label>
    @endforeach
</div>
