@php

    $styles = [
        'style-1' => 'text-2xl sm:text-3xl md:text-4xl text-red-kena bg-white text-center font-black mt-5 mb-5',
    ];

    $style = $styles[$style] ?? '';

@endphp


<h2 class="{{ $style }}">
    {{ $slot }}
</h2>
