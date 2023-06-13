<div class="bg-gray-700 p-5 mt-10 flex flex-col justify-center items-center rounded-lg">

{{--    @if($vacante->candidatos->user_id === $user)--}}
{{--        <h3 class="text-center text-2xl font-bold my-4">Ya te postulaste a esta vacante</h3>--}}
{{--    @endif--}}

    @if (session()->has('mensaje'))
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 5000)"
            class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm text-center"
        >{{ session('mensaje') }}</p>
        <h3 class="text-center text-2xl font-bold my-4">Gracias por postularte</h3>
    @else
        <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>
        <form class="w-96 mt-5" wire:submit.prevent="postularme">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculum o Hoja de Vida (PDF)')" />
                <x-text-input id="cv" class="block mt-1 w-full" wire:model="cv" type="file" name="cv" accept=".pdf" />
                <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            </div>
            <x-primary-button class="w-full justify-center">
                {{ __('Postularme') }}
            </x-primary-button>
        </form>
    @endif
</div>
