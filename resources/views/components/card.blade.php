@props(['valvula'])

<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-orange group transition-colors duration-300">
    <div class="px-2 flex justify-between text-sm">
        <div>{{$valvula->empresa->name}}</div>
        <div>{{ $valvula['nombre'] }}</div>
    </div>

    <div class="py-1">
        <h3 class="group-hover:text-orange text-xl font-bold transition-colors duration-300">{{ $valvula['marca'] }}</h3>
        <p class="text-sm">{{ $valvula['modelo'] }}</p>
        <p class="text-2xs">{{ $valvula['n_de_serie'] }}</p>
    </div>
</div>