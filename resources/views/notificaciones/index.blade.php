<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold text-center my-10">Mis Notificaciones</h1>
                    <div class="divide-y divide-gray-700">
                        @forelse($notificaciones as $notificacion)
                            <div class="p-5 lg:flex lg:justify-between lg:items-center">
                                <div>
                                    <p class="">Tienes un nuevo candidato en:
                                        <span class="font-bolt">{{$notificacion->data['nombre_vacante']}}</span>
                                    </p>
                                    <p>
                                        <span class="font-bolt">{{$notificacion->created_at->diffForHumans()}}</span>
                                    </p>
                                </div>
                                <div class="mt-4 lg:mt-0">
                                    <a href="{{route('candidatos.index', $notificacion->data['id_vacante'])}}" class="bg-teal-500 p-3 text-xs uppercase font-bold text-white rounded-lg">Ver Candidatos</a>
                                </div>
                            </div>
                        @empty
                            <p class="text-center text-gray-300">No hay Notificaciones Nuevas</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
