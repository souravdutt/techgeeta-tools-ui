@props([
    'label' => null,
    'name' => null,
    'placeholder' => null,
    'help' => null,
    'error' => null,
    'required' => false,
    'rows' => 4,
    'value' => null
])

@php
    $textareaId = $name ? $name : 'textarea_' . uniqid();
    $baseTextareaClasses = 'w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-200 dark:bg-gray-700 dark:text-white resize-y';
    $textareaClasses = $error 
        ? $baseTextareaClasses . ' border-red-500 bg-red-50 dark:bg-red-900/10 dark:border-red-400' 
        : $baseTextareaClasses . ' border-gray-300 bg-white dark:border-gray-600';
@endphp

<div {{ $attributes->only('class') }}>
    @if($label)
        <label for="{{ $textareaId }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
            {{ $label }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    <textarea
        id="{{ $textareaId }}"
        @if($name) name="{{ $name }}" @endif
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($required) required @endif
        rows="{{ $rows }}"
        {{ $attributes->except(['class'])->merge(['class' => $textareaClasses]) }}
    >{{ $value }}</textarea>

    @if($help && !$error)
        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ $help }}</p>
    @endif

    @if($error)
        <p class="text-xs text-red-600 dark:text-red-400 mt-1 flex items-center">
            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
            </svg>
            {{ $error }}
        </p>
    @endif
</div>
