<x-layout>
    <div class="pb-20">
        <x-forms.form method="POST" action="/informes">
            <div class="space-y-4">
                <x-forms.input name="numero_acta" label="Acta de Calibracion de Valvulas de Seguridad N.º:" />

                <x-forms.input name="tag" label="TAG" />

                <x-forms.fecha name="fecha" label="Fecha" />
            </div>

            <x-forms.divider />

            <div>
                <x-forms.select :options="$valvulas" name="valvula" label="Valvula" />
            </div>

            <x-forms.divider />

            <div>
                <x-section-heading size="normal">Unidades</x-section-heading>

                <x-forms.small-input name="presion" label="Presion" />
                <x-forms.small-input name="diametro" label="Diametro" />
                <x-forms.small-input name="otras" label="Otras" />
            </div>

            <div>
                <x-section-heading size="normal">Tareas Efectuadas</x-section-heading>
                <x-forms.checkbox :options="['Calibrada', 'Reparada', 'Remplazada']" name="tareas_efectuadas" flex="flex"/>
            </div>

            <x-forms.divider />

            <div class="space-y-4">
                <x-section-heading>Caracteristicas de la Calibracion</x-section-heading>
                <div>
                    <div class="mx-1">
                        <x-section-heading size="normal">Valor Nominal</x-section-heading>
                    </div>

                    <div class="grid grid-cols-3">
                        <x-forms.small-input name="presion-timbre" label="Presion de Timbre" />
                        <x-forms.small-input name="presion-venteo" label="Presion de Venteo" />
                        <x-forms.small-input name="presion-cierre" label="Presion de Cierre" />
                    </div>
                </div>

                <div>
                    <div class="mx-1">
                        <x-section-heading size="normal">Valor Hallado</x-section-heading>
                    </div>

                    <div class="grid grid-cols-3">
                        <x-forms.small-input name="presion-timbre-1" label="Presion de Timbre" />
                        <x-forms.small-input name="presion-venteo-1" label="Presion de Venteo" />
                        <x-forms.small-input name="presion-cierre-1" label="Presion de Cierre" />
                    </div>
                </div>

                <div>
                    <div class="mx-1">
                        <x-section-heading size="normal">Valor Calibrado</x-section-heading>
                    </div>

                    <div class="grid grid-cols-3">
                        <x-forms.small-input name="presion-timbre-2" label="Presion de Timbre" />
                        <x-forms.small-input name="presion-venteo-2" label="Presion de Venteo" />
                        <x-forms.small-input name="presion-cierre-2" label="Presion de Cierre" />
                    </div>
                </div>
            </div>

            <x-forms.divider />

            <div>
                <x-section-heading>Instrumentos Patrones</x-section-heading>

                <div>
                    <div class="mx-1">
                        <x-section-heading size="normal">Herramienta 1</x-section-heading>
                    </div>

                    <div class="grid grid-cols-4">
                        <x-forms.small-input name="descripcion" label="Descripcion" />
                        <x-forms.small-input name="marca" label="Marca" />
                        <x-forms.small-input name="modelo" label="Modelo" />
                        <x-forms.small-input name="otros" label="Otros" />
                    </div>
                </div>

                <div>
                    <div class="mx-1">
                        <x-section-heading size="normal">Herramienta 2</x-section-heading>
                    </div>

                    <div class="grid grid-cols-4">
                        <x-forms.small-input name="descripcion-1" label="Descripcion" />
                        <x-forms.small-input name="marca-1" label="Marca" />
                        <x-forms.small-input name="modelo-1" label="Modelo" />
                        <x-forms.small-input name="otros-1" label="Otros" />
                    </div>
                </div>

                <div>
                    <div class="mx-1">
                        <x-section-heading size="normal">Herramienta 3</x-section-heading>
                    </div>

                    <div class="grid grid-cols-4">
                        <x-forms.small-input name="descripcion-2" label="Descripcion" />
                        <x-forms.small-input name="marca-2" label="Marca" />
                        <x-forms.small-input name="modelo-2" label="Modelo" />
                        <x-forms.small-input name="otros-2" label="Otros" />
                    </div>
                </div>
            </div>

            <x-forms.divider />

            <div>
                <x-forms.text-box name="observaciones" label="Observaciones" />
            </div>

            <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                <x-forms.input name="elaborado_por" label="Elaborado Por:"/>
                <x-forms.input name="aprobado_por" label="Aprobado Por:"/>
            </div>
            
            <div class="mt-1 flex justify-end gap-x-4">
                <x-forms.button>Crear</x-forms.button>
            </div>
        </x-forms.form>
    </div>
</x-layout>