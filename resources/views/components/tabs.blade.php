@props([
    'tabs' => [],
    'activeTab' => null
])

@php
    $activeTabId = $activeTab ?? (isset($tabs[0]) ? $tabs[0]['id'] : null);
    $tabsId = 'tabs_' . uniqid();
@endphp

<div {{ $attributes->merge(['class' => 'w-full']) }}>
    <!-- Tab Navigation -->
    <div class="border-b border-gray-200 dark:border-gray-700">
        <nav class="-mb-px flex space-x-8" aria-label="Tabs">
            @foreach($tabs as $index => $tab)
                <button 
                    type="button"
                    class="tab-button whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm transition-colors duration-200 {{ $tab['id'] === $activeTabId ? 'border-blue-500 text-blue-600 dark:text-blue-400' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-200' }}"
                    onclick="switchTab('{{ $tabsId }}', '{{ $tab['id'] }}')"
                    data-tab="{{ $tab['id'] }}"
                    @if($tab['id'] === $activeTabId) aria-selected="true" @endif
                >
                    @if(isset($tab['icon']))
                        {!! $tab['icon'] !!}
                    @endif
                    {{ $tab['title'] }}
                    @if(isset($tab['badge']))
                        <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                            {{ $tab['badge'] }}
                        </span>
                    @endif
                </button>
            @endforeach
        </nav>
    </div>

    <!-- Tab Content -->
    <div class="mt-4">
        {{ $slot }}
    </div>
</div>

@push('scripts')
<script>
    function switchTab(tabsId, targetTabId) {
        // Update button states
        const tabButtons = document.querySelectorAll(`[data-tab]`);
        tabButtons.forEach(button => {
            const isActive = button.getAttribute('data-tab') === targetTabId;
            button.setAttribute('aria-selected', isActive);
            
            if (isActive) {
                button.className = button.className.replace(
                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-200',
                    'border-blue-500 text-blue-600 dark:text-blue-400'
                );
            } else {
                button.className = button.className.replace(
                    'border-blue-500 text-blue-600 dark:text-blue-400',
                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-200'
                );
            }
        });

        // Update content panels
        const contentPanels = document.querySelectorAll(`[data-tab-content]`);
        contentPanels.forEach(panel => {
            if (panel.getAttribute('data-tab-content') === targetTabId) {
                panel.classList.remove('hidden');
            } else {
                panel.classList.add('hidden');
            }
        });

        // Trigger custom event
        document.dispatchEvent(new CustomEvent('tabChanged', {
            detail: { tabId: targetTabId }
        }));
    }
</script>
@endpush
