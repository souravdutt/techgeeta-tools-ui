<?php

namespace TechGeeta\BrandingUI\View\Components;

use Illuminate\View\Component;

class Textarea extends Component
{
    public ?string $label;
    public ?string $name;
    public ?string $placeholder;
    public ?string $help;
    public ?string $error;
    public bool $required;
    public int $rows;

    public function __construct(
        ?string $label = null,
        ?string $name = null,
        ?string $placeholder = null,
        ?string $help = null,
        ?string $error = null,
        bool $required = false,
        int $rows = 4
    ) {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->help = $help;
        $this->error = $error;
        $this->required = $required;
        $this->rows = $rows;
    }

    public function render()
    {
        return view('ui::components.textarea');
    }
}
