@props([
    'variant' => 'primary',
    'size' => 'medium',
    'type' => 'button',
    'disabled' => false,
    'href' => null,
    'icon' => null,
    'iconPosition' => 'left'
])

@php
    $baseClasses = 'cursor-pointer inline-flex items-center justify-center font-medium rounded-lg border transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed';

    $variantClasses = match ($variant) {
        'primary' => 'bg-primary-600 hover:bg-primary-700 focus:ring-primary-500 text-white border-transparent',
        'secondary' => 'bg-white hover:bg-gray-50 focus:ring-primary-500 text-gray-700 border-gray-300 dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-600',
        'success' => 'bg-green-600 hover:bg-green-700 focus:ring-green-500 text-white border-transparent',
        'danger' => 'bg-red-600 hover:bg-red-700 focus:ring-red-500 text-white border-transparent',
        'warning' => 'bg-yellow-600 hover:bg-yellow-700 focus:ring-yellow-500 text-white border-transparent',
        'outline' => 'bg-transparent hover:bg-primary-50 focus:ring-primary-500 text-primary-600 border-primary-600 dark:text-primary-400 dark:border-primary-400 dark:hover:bg-primary-900/20',
        'ghost' => 'bg-transparent hover:bg-gray-100 focus:ring-gray-500 text-gray-700 border-transparent dark:text-gray-200 dark:hover:bg-gray-700',
        default => 'bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 text-white border-transparent',
    };
    
    $sizeClasses = match ($size) {
        'small' => 'px-3 py-1.5 text-xs',
        'medium' => 'px-4 py-2 text-sm',
        'large' => 'px-6 py-3 text-base',
        default => 'px-4 py-2 text-sm',
    };
    
    $classes = trim($baseClasses . ' ' . $variantClasses . ' ' . $sizeClasses);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon && $iconPosition === 'left')
            {!! $icon !!}
        @endif
        
        {{ $slot }}
        
        @if($icon && $iconPosition === 'right')
            {!! $icon !!}
        @endif
    </a>
@else
    <button 
        type="{{ $type }}" 
        @if($disabled) disabled @endif
        {{ $attributes->merge(['class' => $classes]) }}
    >
        @if($icon && $iconPosition === 'left')
            {!! $icon !!}
        @endif
        
        {{ $slot }}
        
        @if($icon && $iconPosition === 'right')
            {!! $icon !!}
        @endif
    </button>
@endif
