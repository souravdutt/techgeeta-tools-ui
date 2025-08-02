@props(['name', 'options', 'label', 'description', 'selected' => null, 'icon' => '⚙️'])

<div class="feature-card">
    <label for="{{ $name }}" class="form-label">
        <span class="mr-2 text-lg">{{ $icon }}</span>{{ $label }}
    </label>
    <div class="grid grid-cols-1 gap-3">
        @foreach($options as $value => $option)
            <label class="relative cursor-pointer">
                <input
                    type="radio"
                    name="{{ $name }}"
                    value="{{ $value }}"
                    class="sr-only peer"
                    @if($loop->first || $value === $selected) checked @endif
                >
                <div class="p-3 border-2 border-gray-200 rounded-lg peer-checked:border-blue-500 peer-checked:bg-blue-50 transition-all hover:shadow-lg dark:border-gray-700 dark:peer-checked:bg-slate-900 dark:peer-checked:border-blue-900">
                    <div class="flex items-center justify-between">
                        <div class="flex-1">
                            <div class="font-medium text-gray-900 text-sm dark:text-gray-200">{{ $option['label'] }}</div>
                            <div class="text-xs text-gray-500 mt-1 dark:text-gray-400">{{ $option['description'] }}</div>
                        </div>
                        <div class="ml-3">
                            <div class="w-4 h-4 border-2 border-gray-300 rounded-full peer-checked:border-blue-500 peer-checked:bg-blue-500 transition-all">
                                <div class="w-2 h-2 bg-white rounded-full m-0.5 opacity-0 peer-checked:opacity-100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </label>
        @endforeach
    </div>
    @if($description)
        <p class="form-help mt-2">{{ $description }}</p>
    @endif
</div>
