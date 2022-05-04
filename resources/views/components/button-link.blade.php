@props(['color' => 'blue', 'type' => 'button', 'link' => ''])

@php
    $classes = "text-white bg-$color-700 hover:bg-$color-800 focus:ring-4 focus:outline-none focus:ring-$color-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-$color-600 dark:hover:bg-$color-700 dark:focus:ring-$color-800"
@endphp

<a {{ $attributes->merge([
    'href',
    'class' => $classes
    ]) }}>
    {{ $slot }}
</a>