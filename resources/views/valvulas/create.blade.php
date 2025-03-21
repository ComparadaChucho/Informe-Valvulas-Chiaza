<x-layout>
    <div class="pb-20">
        <x-forms.form method="POST" action="/valvula">
            <div>
                <x-forms.input name="empresa" label="Empresa" />
                <p class="font-normal text-2xs text-white/50">
                    Por favor, escriba el nombre exacto de la empresa, respetando mayúsculas, minúsculas y espacios. Si no existe, se creará automáticamente.
                </p>
            </div>

            <div class="items-center grid grid-cols-2 justify-between gap-x-5">
                <x-forms.divider />
                <x-forms.divider />
            </div>

            <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                <x-forms.input name="marca" label="Marca" />
                <x-forms.input name="modelo" label="Modelo" />
                <x-forms.input name="n_de_serie" label="Nº de Serie" />
                <x-forms.input name="diametro" label="Diametro" />
            </div>

            <x-forms.divider />

            <div>
                <x-section-heading size="normal">Tipo</x-section-heading>
                <x-forms.options :options="['Resorte', 'Piloto']" name="tipo" />
            </div>



            <div class="flex justify-end">
                <x-forms.button>Crear</x-forms.button>
            </div>
        </x-forms.form>
    </div>
</x-layout>
    