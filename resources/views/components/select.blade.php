@props([
    'label' => null,
    'id' => null,
    'name' => null,
    'options' => [],
    'placeholder' => null,
    'help' => null,
    'error' => null,
    'required' => false,
    'value' => null,
    'multiple' => false,
    'size' => null
])

@php
    if ($id) {
        $selectId = $id;
    } else {
        $selectId = $name ? $name : 'select_' . uniqid();
    }

    // Ensure name ends with [] when multiple selection is enabled
    $nameAttr = $name;
    if ($multiple && $name && !str_ends_with($name, '[]')) {
        $nameAttr = $name . '[]';
    }

    // Determine selected values
    if ($multiple) {
        $selected = old($name, $value ?? []);
        if (!is_array($selected)) {
            $selected = (array) $selected;
        }
    } else {
        $selected = old($name, $value);
    }

    $baseSelectClasses = 'w-full border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-200 dark:bg-gray-700 dark:text-white';
    $selectClasses = $error
        ? $baseSelectClasses . ' border-red-500 bg-red-50 dark:bg-red-900/10 dark:border-red-400'
        : $baseSelectClasses . ' border-gray-300 bg-white dark:border-gray-600';

    if ($size === 'small') {
        $selectClasses .= ' text-sm py-1 px-2';
    } elseif ($size === 'large') {
        $selectClasses .= ' text-lg py-3 px-4';
    } else {
        $selectClasses .= ' text-base py-2 px-3';
    }
@endphp

<div {{ $attributes->only('class') }}>
    @if($label)
        <label for="{{ $selectId }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
            {{ $label }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    <select
        id="{{ $selectId }}"
        @if($nameAttr) name="{{ $nameAttr }}" @endif
        @if($required) required @endif
        @if($multiple) multiple @endif
        {{ $attributes->except(['class'])->merge(['class' => $selectClasses, 'aria-invalid' => $error ? 'true' : 'false']) }}
    >
        @if($placeholder && !$multiple)
            <option value="" {{ (string)$selected === '' ? 'selected' : '' }} disabled hidden>{{ $placeholder }}</option>
        @endif

        {{-- Support for optgroups: options can be ['Group Label' => [value => label, ...], value => label, ...] --}}
        @foreach($options as $optKey => $optLabel)
            @if(is_array($optLabel))
                <optgroup label="{{ $optKey }}">
                    @foreach($optLabel as $val => $lbl)
                        @php
                            $isSelected = $multiple
                                ? in_array((string)$val, array_map('strval', $selected), true)
                                : ((string)$val === (string)$selected);
                        @endphp
                        <option value="{{ $val }}" {{ $isSelected ? 'selected' : '' }}>{{ $lbl }}</option>
                    @endforeach
                </optgroup>
            @else
                @php
                    // When options are non-associative (indexed array), use the label as value
                    $valueKey = is_int($optKey) ? $optLabel : $optKey;
                    $labelText = is_int($optKey) ? $optLabel : $optLabel;
                    $isSelected = $multiple
                        ? in_array((string)$valueKey, array_map('strval', $selected), true)
                        : ((string)$valueKey === (string)$selected);
                @endphp
                <option value="{{ $valueKey }}" {{ $isSelected ? 'selected' : '' }}>{{ $labelText }}</option>
            @endif
        @endforeach
    </select>

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