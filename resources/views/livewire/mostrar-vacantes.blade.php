<div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

        @forelse( $vacantes as $vacante)
            <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
                <div class="space-y-4">
                    <a href="{{ route('vacantes.show', $vacante->id) }}" class="text-xl dark:text-gray-100 font-bold">
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
                    <a href="{{ route('vacantes.edit', $vacante->id) }}" class="bg-yellow-600 py-2 px-4 text-white rounded-lg text-xs font-bold uppercase text-center">
                        Editar
                    </a>
                    <button wire:click="$emit('mostrarAlerta', '{{$vacante->id}}')" class="bg-red-600 py-2 px-4 text-white rounded-lg text-xs font-bold uppercase text-center">
                        Eliminar
                    </button>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar</p>
        @endforelse
    </div>

    <div class="mt-10 ">
        {{ $vacantes->links() }}
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', id => {
            Swal.fire({
                title: '¿Eliminar Vacante?',
                text: "Estas seguro que deseas eliminar la vacante!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    //Eliminar la vacante desde el servidor
                    Livewire.emit('eliminarVacante', id)
                    Swal.fire(
                        'Se eliminó la vacante',
                        'Eliminado Correctamente.',
                        'success'
                    )
                }
            })
        });
    </script>
@endpush
