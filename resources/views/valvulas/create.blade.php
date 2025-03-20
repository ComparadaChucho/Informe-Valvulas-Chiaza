<x-layout>
    <div class="pb-20">
        <x-forms.form method="POST" action="/valvulas">
            <x-forms.dropdown :options="$empresas" name="empresa" label="Empresa" />

            <x-forms.divider />
            <div class="grid grid-cols-2 gap-x-4 gap-y-2">
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
                <x-forms.button>Submit</x-forms.button>
            </div>
        </x-forms.form>
    </div>
</x-layout>
    