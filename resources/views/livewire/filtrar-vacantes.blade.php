<div class="py-10">
    <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">Buscar y Filtrar Vacantes</h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent="leerDatosFormulario">
            <div class="md:grid md:grid-cols-3 gap-5">
                <div class="mb-5">
                    <x-input-label for="termino" :value="__('Término de Búsqueda')" />
                    <x-text-input id="termino" class="block mt-1 w-full" type="text" wire:model="termino" placeholder="Buscar por Término: ej. Laravel"/>
                </div>

                <div class="mb-5">
                    <x-input-label for="categoria" :value="__('Categoría')" />
                    <select
                        wire:model="categoria"
                        class="block border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 w-full focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        <option>-- Seleccione --</option>
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>

                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <x-input-label :value="__('Salario')" />
                    <select
                        wire:model="salario"
                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 w-full focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                    >
                        <option>-- Seleccione --</option>
                        @foreach($salarios as $salario)
                            <option value="{{$salario->id}}">{{$salario->salario}}</option>

                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end">
                <input
                    type="submit"
                    class="bg-teal-500 hover:bg-teal-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                    value="Buscar"
                />
            </div>
        </form>
    </div>
</div>
