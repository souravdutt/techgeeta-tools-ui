<?php

namespace TechGeeta\BrandingUI\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public string $variant;
    public string $size;
    public string $type;
    public bool $disabled;
    public ?string $href;
    public array $attributes;

    public function __construct(
        string $variant = 'primary',
        string $size = 'medium',
        string $type = 'button',
        bool $disabled = false,
        ?string $href = null
    ) {
        $this->variant = $variant;
        $this->size = $size;
        $this->type = $type;
        $this->disabled = $disabled;
        $this->href = $href;
    }

    public function render()
    {
        return view('ui::components.button');
    }

    public function getVariantClasses(): string
    {
        return match ($this->variant) {
            'primary' => 'bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 text-white border-transparent',
            'secondary' => 'bg-white hover:bg-gray-50 focus:ring-blue-500 text-gray-700 border-gray-300 dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-600',
            'success' => 'bg-green-600 hover:bg-green-700 focus:ring-green-500 text-white border-transparent',
            'danger' => 'bg-red-600 hover:bg-red-700 focus:ring-red-500 text-white border-transparent',
            'warning' => 'bg-yellow-600 hover:bg-yellow-700 focus:ring-yellow-500 text-white border-transparent',
            'outline' => 'bg-transparent hover:bg-blue-50 focus:ring-blue-500 text-blue-600 border-blue-600 dark:text-blue-400 dark:border-blue-400 dark:hover:bg-blue-900/20',
            'ghost' => 'bg-transparent hover:bg-gray-100 focus:ring-gray-500 text-gray-700 border-transparent dark:text-gray-200 dark:hover:bg-gray-700',
            default => 'bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 text-white border-transparent',
        };
    }

    public function getSizeClasses(): string
    {
        return match ($this->size) {
            'small' => 'px-3 py-1.5 text-xs',
            'medium' => 'px-4 py-2 text-sm',
            'large' => 'px-6 py-3 text-base',
            default => 'px-4 py-2 text-sm',
        };
    }
}
