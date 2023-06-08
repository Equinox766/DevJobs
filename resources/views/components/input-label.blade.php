@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-bolt uppercase mb-2 text-gray-500']) }}>
    {{ $value ?? $slot }}
</label>
