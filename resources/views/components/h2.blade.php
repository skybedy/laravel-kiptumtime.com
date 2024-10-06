@php

    $styles = [
        'style-1' => 'text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl text-red-600 bg-white text-center font-black mt-5 mb-5 py-1 rounded',
    ];

    $style = $styles[$style] ?? '';

@endphp


<h2 class="{{ $style }}">
    {{ $slot }}
</h2>
