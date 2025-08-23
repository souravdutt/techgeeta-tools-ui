<?php

namespace TechGeeta\BrandingUI\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public string $type;
    public ?string $label;
    public ?string $name;
    public ?string $placeholder;
    public ?string $help;
    public ?string $error;
    public bool $required;

    public function __construct(
        string $type = 'text',
        ?string $label = null,
        ?string $name = null,
        ?string $placeholder = null,
        ?string $help = null,
        ?string $error = null,
        bool $required = false
    ) {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->help = $help;
        $this->error = $error;
        $this->required = $required;
    }

    public function render()
    {
        return view('ui::components.input');
    }
}
