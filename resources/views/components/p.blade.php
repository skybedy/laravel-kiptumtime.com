@php

    $styles = [
        'style-1' => 'text-base sm:text-lg md:text-xl lg:text-2xl px-2 sm:px-4 md:px-5 text-white mt-3 border-l border-r border-white',
    ];

    $style = $styles[$style] ?? '';

@endphp


<p class="{{ $style }}">
    {{ $slot }}
</p>
