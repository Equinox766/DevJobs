<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent="crearVacante">
    <!-- Titulo Vacante -->
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')" placeholder="Titulo Vacante"/>
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <!-- Salario -->
    <div>
        <x-input-label for="salario" :value="__('Salario mensual')" />
        <select
            id="salario"
            wire:model="salario"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 w-full focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
        >
            <option>-- Seleccione --</option>
            @foreach($salarios as $salario)
                <option value="{{$salario->id}}">{{$salario->salario}}</option>

            @endforeach
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>
    <!-- Salario -->
    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select
            id="categoria"
            wire:model="categoria"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 w-full focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
        >
            <option>-- Seleccione --</option>
            @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>

            @endforeach
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>
    <!-- Empresa -->
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')" placeholder="Empresa: ej. Netflix, Uber, Shopify"/>
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    <!-- Postulación -->
    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia" :value="old('ultimo_dia')"/>
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>
    <!-- Descripción -->
    <div>
        <x-input-label for="descripcion" :value="__('Descripción del puesto')" />
        <textarea
            id="descripcion"
            class="border-gray-300 dark:border-gray-700 h-72 dark:bg-gray-900 dark:text-gray-300 w-full focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
            placeholder="Descripción general del puesto, experiencia"
            wire:model="descripcion"
        ></textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>
    <!-- Imagen -->
    <div>
        <x-input-label for="imagen" :value="__('imagen')" />
        <x-text-input id="imagen" accept="image/*" class="block mt-1 w-full " type="file" wire:model="imagen"/>
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>
    <div class="my-5 w-80">
        @if($imagen)
            Imagen:
            <img src="{{ $imagen->temporaryUrl() }}">
        @endif
    </div>
    <x-primary-button class="justify-center w-full">
        Crear vacante
    </x-primary-button>
</form>
