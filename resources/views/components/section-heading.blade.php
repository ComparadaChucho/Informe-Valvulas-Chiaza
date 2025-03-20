@props(['size' => 'xl', 'height' =>'h-2'])

<div class="inline-flex items-center gap-x-2 mb-3">
    <span class="w-2 {{ $height }} bg-orange inline-block"></span>
    <h3 class="font-bold text-{{ $size }}">
        {{ $slot }}
    </h3>
</div>