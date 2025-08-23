@props([
    'name',
    'label' => null,
    'checked' => false,
    'disabled' => false
])

@php
    $toggleId = $name . '_' . uniqid();
@endphp

<div {{ $attributes->merge(['class' => 'flex items-center']) }}>
    <button
        type="button"
        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 {{ $checked ? 'bg-blue-600' : 'bg-gray-200 dark:bg-gray-600' }} {{ $disabled ? 'opacity-50 cursor-not-allowed' : '' }}"
        role="switch"
        aria-checked="{{ $checked ? 'true' : 'false' }}"
        @if(!$disabled) onclick="toggleSwitch('{{ $toggleId }}')" @endif
        @if($disabled) disabled @endif
    >
        <span class="sr-only">{{ $label ?? 'Toggle' }}</span>
        <span
            aria-hidden="true"
            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out {{ $checked ? 'translate-x-5' : 'translate-x-0' }}"
        ></span>
    </button>

    <input
        type="hidden"
        id="{{ $toggleId }}"
        name="{{ $name }}"
        value="{{ $checked ? '1' : '0' }}"
    >

    @if($label)
        <label for="{{ $toggleId }}" class="ml-3 text-sm text-gray-700 dark:text-gray-300 {{ $disabled ? 'opacity-50' : 'cursor-pointer' }}">
            {{ $label }}
        </label>
    @endif
</div>

@push('scripts')
<script>
    function toggleSwitch(toggleId) {
        const input = document.getElementById(toggleId);
        const button = input.previousElementSibling;
        const knob = button.querySelector('span[aria-hidden="true"]');
        
        const isChecked = input.value === '1';
        const newValue = isChecked ? '0' : '1';
        
        input.value = newValue;
        button.setAttribute('aria-checked', newValue === '1' ? 'true' : 'false');
        
        if (newValue === '1') {
            button.classList.remove('bg-gray-200', 'dark:bg-gray-600');
            button.classList.add('bg-blue-600');
            knob.classList.remove('translate-x-0');
            knob.classList.add('translate-x-5');
        } else {
            button.classList.remove('bg-blue-600');
            button.classList.add('bg-gray-200', 'dark:bg-gray-600');
            knob.classList.remove('translate-x-5');
            knob.classList.add('translate-x-0');
        }
        
        // Trigger change event
        input.dispatchEvent(new Event('change', { bubbles: true }));
    }
</script>
@endpush
