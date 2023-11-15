@props(['active'])

@php
    $classes = $active ?? false ? 'block px-3 py-2 text-white bg-indigo-700 rounded md:p-0 md:bg-transparent md:text-indigo-700 md:dark:text-indigo-500' : 'block px-3 py-2 text-gray-900 rounded md:p-0 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-700 md:dark:hover:text-indigo-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
