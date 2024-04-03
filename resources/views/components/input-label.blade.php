@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm md:text-base text-white']) }}>
    {{ $value ?? $slot }}
</label>
