<?php

namespace TechGeeta\BrandingUI\View\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{
    public string $id;
    public string $align;
    public string $width;

    public function __construct(
        ?string $id = null,
        string $align = 'right',
        string $width = '48'
    ) {
        $this->id = $id ?? 'dropdown_' . uniqid();
        $this->align = $align;
        $this->width = $width;
    }

    public function render()
    {
        return view('ui::components.dropdown');
    }
}
