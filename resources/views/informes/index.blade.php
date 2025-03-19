<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Buscar Informes</h1>
            <input class="mt-3 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full" type="text" placeholder="Chiaza">
        </section>

        <section class="pt-10">
            <x-section-heading>Informes Recientes</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8">
                <x-card></x-card>
                <x-card></x-card>
                <x-card></x-card>
                <x-card></x-card>
                <x-card></x-card>
                <x-card></x-card>
                <x-card></x-card>
                <x-card></x-card>
                <x-card></x-card>
            </div>
        </section>
    </div>
</x-layout>
