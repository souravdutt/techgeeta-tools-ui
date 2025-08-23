<?php

namespace TechGeeta\BrandingUI\View\Components;

use Illuminate\View\Component;

class DropdownItem extends Component
{
    public ?string $href;
    public bool $active;

    public function __construct(?string $href = null, bool $active = false)
    {
        $this->href = $href;
        $this->active = $active;
    }

    public function render()
    {
        return view('ui::components.dropdown-item');
    }
}
