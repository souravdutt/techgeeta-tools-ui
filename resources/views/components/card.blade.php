@props([
    'title' => null,
    'description' => null,
    'border' => true,
    'shadow' => true,
    'padding' => 'medium'
])

@php
    $baseClasses = 'bg-white dark:bg-gray-800 rounded-lg';
    
    $borderClasses = $border ? 'border border-gray-200 dark:border-gray-700' : '';
    $shadowClasses = $shadow ? 'shadow-sm' : '';
    
    $paddingClasses = match ($padding) {
        'none' => '',
        'small' => 'p-4',
        'medium' => 'p-6',
        'large' => 'p-8',
        default => 'p-6',
    };
    
    $classes = trim($baseClasses . ' ' . $borderClasses . ' ' . $shadowClasses . ' ' . $paddingClasses);
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($title || $description)
        <div class="mb-4 @if(!$title && !$description) hidden @endif">
            @if($title)
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $title }}</h3>
            @endif
            @if($description)
                <p class="text-sm text-gray-600 dark:text-gray-300 @if($title) mt-1 @endif">{{ $description }}</p>
            @endif
        </div>
    @endif

    {{ $slot }}
</div>
