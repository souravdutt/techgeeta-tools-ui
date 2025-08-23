@props([
    'href' => null,
    'active' => false
])

@php
    $baseClasses = 'block w-full text-left px-4 py-2 text-sm transition-colors duration-200';
    $stateClasses = $active 
        ? 'bg-blue-100 text-blue-900 dark:bg-blue-900 dark:text-blue-200'
        : 'text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white';
    $classes = trim($baseClasses . ' ' . $stateClasses);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }} role="menuitem">
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes, 'type' => 'button']) }} role="menuitem">
        {{ $slot }}
    </button>
@endif
