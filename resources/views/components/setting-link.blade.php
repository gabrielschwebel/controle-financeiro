@props(['active'])

@php
$classes = ($active ?? false)
            ? 'p-3 font-semibold dark:text-gray-400'
            : 'p-3 hover:font-semibold dark:text-gray-400';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
