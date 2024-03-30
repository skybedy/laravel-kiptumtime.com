@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 font-medium leading-5 text-white text-lg xl:text-xl 2xl:text-2xl border-b-2 border-transparent  border-white focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out bg-red-5000 text-center'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-lg xl:text-xl 2xl:text-2xl font-medium leading-5 text-white  hover:border-white focus:outline-none focus:text-gray-100 focus:border-gray-100 transition duration-150 ease-in-out bg-slate-5000 text-center';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
