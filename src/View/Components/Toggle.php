<?php

namespace TechGeeta\BrandingUI\View\Components;

use Illuminate\View\Component;

class Toggle extends Component
{
    public string $name;
    public ?string $label;
    public bool $checked;
    public bool $disabled;

    public function __construct(
        string $name,
        ?string $label = null,
        bool $checked = false,
        bool $disabled = false
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->checked = $checked;
        $this->disabled = $disabled;
    }

    public function render()
    {
        return view('ui::components.toggle');
    }
}
