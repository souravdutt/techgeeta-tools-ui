@props([
    'id' => null,
    'align' => 'right',
    'width' => '48',
    'trigger' => null
])

@php
    $dropdownId = $id ?? 'dropdown_' . uniqid();
    $alignClasses = match ($align) {
        'left' => 'origin-top-left left-0',
        'right' => 'origin-top-right right-0',
        default => 'origin-top-right right-0',
    };
    $widthClasses = match ($width) {
        '48' => 'w-48',
        '56' => 'w-56',
        '64' => 'w-64',
        'full' => 'w-full',
        default => 'w-48',
    };
@endphp

<div class="relative inline-block text-left">
    <!-- Trigger -->
    <div>
        <button 
            type="button" 
            class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 dark:hover:bg-gray-600"
            onclick="toggleDropdown('{{ $dropdownId }}')"
            aria-expanded="false"
            aria-haspopup="true"
        >
            @if($trigger)
                {!! $trigger !!}
            @else
                Options
            @endif
            <svg class="-mr-1 ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <!-- Dropdown panel -->
    <div 
        id="{{ $dropdownId }}" 
        class="hidden absolute {{ $alignClasses }} mt-2 {{ $widthClasses }} rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5 focus:outline-none z-50"
        role="menu"
        aria-orientation="vertical"
    >
        <div class="py-1" role="none">
            {{ $slot }}
        </div>
    </div>
</div>

@push('scripts')
<script>
    function toggleDropdown(dropdownId) {
        const dropdown = document.getElementById(dropdownId);
        dropdown.classList.toggle('hidden');
        
        // Close other dropdowns
        document.querySelectorAll('[role="menu"]').forEach(menu => {
            if (menu.id !== dropdownId && !menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
            }
        });
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdowns = document.querySelectorAll('[role="menu"]');
        dropdowns.forEach(dropdown => {
            const button = dropdown.previousElementSibling.querySelector('button');
            if (!dropdown.contains(event.target) && !button.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    });

    // Close dropdown with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            document.querySelectorAll('[role="menu"]:not(.hidden)').forEach(dropdown => {
                dropdown.classList.add('hidden');
            });
        }
    });
</script>
@endpush
