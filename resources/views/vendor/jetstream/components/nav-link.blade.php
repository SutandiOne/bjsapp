@props(['active'])

@php
$classes = $active ?? false ? 'print:hidden inline-flex items-center px-1 pt-1 border-b-4 border-indigo-400 text-md tracking-widest font-bold leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition' : 'print:hidden inline-flex items-center px-1 pt-1 border-b-4 border-transparent text-md tracking-widest font-bold leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
