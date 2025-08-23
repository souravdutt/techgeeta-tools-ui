<?php

namespace TechGeeta\BrandingUI\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public string $variant;
    public string $size;

    public function __construct(string $variant = 'default', string $size = 'medium')
    {
        $this->variant = $variant;
        $this->size = $size;
    }

    public function render()
    {
        return view('ui::components.badge');
    }
}
