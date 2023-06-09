<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

    @forelse( $vacantes as $vacante)
        <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
            <div class="space-y-4">
                <a href="#" class="text-xl dark:text-gray-100 font-bold">
                    {{ $vacante->titulo }}
                </a>
                <p class="text-sm dark:text-gray-400 font-bold">
                    {{ $vacante->empresa }}
                </p>
                <p class="dark:text-gray-300 text-sm">
                    Ultimo dia: {{ $vacante->ultimo_dia->format('d/m/Y') }}
                </p>
            </div>
            <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                <a href="#" class="bg-indigo-800 py-2 px-4 text-white rounded-lg text-xs font-bold uppercase text-center">
                    Candidatos
                </a>
                <a href="#" class="bg-yellow-600 py-2 px-4 text-white rounded-lg text-xs font-bold uppercase text-center">
                    Editar
                </a>
                <a href="#" class="bg-red-600 py-2 px-4 text-white rounded-lg text-xs font-bold uppercase text-center">
                    Eliminar
                </a>
            </div>
        </div>
    @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar</p>
    @endforelse
</div>

<div class="mt-10 ">
    {{ $vacantes->links() }}
</div>
