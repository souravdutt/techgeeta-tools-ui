@props([
    'id',
    'title' => null,
    'size' => 'medium',
    'closeable' => true
])

@php
    $sizeClasses = match ($size) {
        'small' => 'max-w-md',
        'medium' => 'max-w-lg',
        'large' => 'max-w-2xl',
        'extra-large' => 'max-w-4xl',
        'full' => 'max-w-full mx-4',
        default => 'max-w-lg',
    };
@endphp

<div 
    id="{{ $id }}" 
    class="fixed inset-0 z-50 overflow-y-auto hidden"
    aria-labelledby="{{ $id }}-title" 
    role="dialog" 
    aria-modal="true"
>
    <!-- Background overlay -->
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <!-- Modal panel -->
        <div class="relative inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle {{ $sizeClasses }} sm:w-full sm:p-6">
            @if($title)
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white" id="{{ $id }}-title">
                        {{ $title }}
                    </h3>
                    
                    @if($closeable)
                        <button type="button" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200" onclick="closeModal('{{ $id }}')">
                            <span class="sr-only">Close</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    @endif
                </div>
            @elseif($closeable)
                <div class="flex justify-end mb-4">
                    <button type="button" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200" onclick="closeModal('{{ $id }}')">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @endif

            <div class="mt-2">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function openModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    // Close modal when clicking outside
    document.addEventListener('click', function(event) {
        const modals = document.querySelectorAll('[role="dialog"]');
        modals.forEach(modal => {
            if (event.target === modal && !modal.classList.contains('hidden')) {
                closeModal(modal.id);
            }
        });
    });

    // Close modal with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            const openModals = document.querySelectorAll('[role="dialog"]:not(.hidden)');
            openModals.forEach(modal => {
                closeModal(modal.id);
            });
        }
    });
</script>
@endpush
