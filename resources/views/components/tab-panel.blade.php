@props([
    'id',
    'active' => false
])

<div 
    data-tab-content="{{ $id }}"
    {{ $attributes->merge(['class' => 'tab-panel ' . ($active ? '' : 'hidden')]) }}
    role="tabpanel"
    aria-labelledby="{{ $id }}-tab"
>
    {{ $slot }}
</div>
