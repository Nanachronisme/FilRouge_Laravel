{{-- TODO make it no longer dynamic to prevent Tailwind compiling error. Remove the color safelist afterwards --}}
@props(['color' => 'blue', 'type' => 'button', 'href'])

@php
    //class must be identical to the button component
    $classes = "text-white bg-$color-700 hover:bg-$color-800 focus:ring-4 focus:outline-none 
    focus:ring-$color-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex 
    items-center mr-2 dark:bg-$color-600 dark:hover:bg-$color-700 dark:focus:ring-$color-800";

    //Change styling for gray button
    if ($color == 'gray') {
        //.= operator must be used to concatenate strings
        $classes .= " text-black border border-gray-200 hover:bg-gray-100 hover:text-blue-700";
    }

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>