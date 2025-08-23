@props([
    'variant' => 'default',
    'size' => 'medium'
])

@php
    $baseClasses = 'inline-flex items-center font-medium rounded-full';
    
    $variantClasses = match ($variant) {
        'primary' => 'bg-primary-100 text-primary-800 dark:bg-primary-900/30 dark:text-primary-200',
        'secondary' => 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200',
        'success' => 'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-200',
        'danger' => 'bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-200',
        'warning' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-200',
        'info' => 'bg-primary-100 text-primary-800 dark:bg-primary-900/30 dark:text-primary-200',
        'soon' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-200',
        default => 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200',
    };
    
    $sizeClasses = match ($size) {
        'small' => 'px-2 py-0.5 text-xs',
        'medium' => 'px-2.5 py-0.5 text-xs',
        'large' => 'px-3 py-1 text-sm',
        default => 'px-2.5 py-0.5 text-xs',
    };
    
    $classes = trim($baseClasses . ' ' . $variantClasses . ' ' . $sizeClasses);
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
