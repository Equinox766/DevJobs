<div>
    <livewire:filtrar-vacantes />
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-400 mb-12">
                Nuestras Vacantes Disponibles
            </h3>
            <div class="bg-gray-700 shadow-sm rounded-lg p-6 divide-gray-400 divide-y">
                @forelse($vacantes as $vacante)
                    <div class="md:flex md:justify-between md:items-center py-6">
                        <div class="md:flex-1">
                            <a class="text-xl font-extrabold text-white" href="{{route('vacantes.show', $vacante->id)}}">
                                {{$vacante->titulo}}
                            </a>
                            <p class="text-base text-gray-300 mb-3">{{$vacante->empresa}}</p>
                            <p class="text-xs text-gray-300 mb-1">{{$vacante->categoria->categoria}}</p>
                            <p class="text-base text-gray-300 mb-3">{{$vacante->salario->salario}}</p>
                            <p class="text-bolt text-gray-300 text-xs">
                                Ultimo dia para postularse:
                                <span class="font-normal">{{$vacante->ultimo_dia->format('d/m/Y')}}</span>
                            </p>
                        </div>
                        <div class="mt-5 md:mt-0">
                            <a class="bg-teal-500 p-3 text-xs uppercase font-bold text-white rounded-lg block text-center " href="{{route('vacantes.show', $vacante->id)}}">Ver Vacante</a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-300">No hay vacantes aún</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
