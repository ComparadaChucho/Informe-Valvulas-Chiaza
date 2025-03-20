@props(['options' => [], 'name' => 'opcion', 'selected' => null, 'flex' => 'inline-flex'])

<div class="space-y-2">
    @foreach ($options as $option)
        <label class="{{ $flex }} items-center space-x-2 cursor-pointer group">
            <input type="radio" name="{{ $name }}" value="{{ $option }}" 
                class="hidden peer" 
                @if ($selected === $option) checked @endif>
            <div class="w-5 h-5 rounded-full border-2 border-white/10 peer-checked:bg-orange group-hover:border-white/20 group-hover:bg-orange/80 transition-colors duration-300"></div>
            <span class="text-white">{{ $option }}</span>
        </label>
    @endforeach
</div>
