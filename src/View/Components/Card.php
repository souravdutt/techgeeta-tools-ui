<?php

namespace TechGeeta\BrandingUI\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public ?string $title;
    public ?string $description;
    public bool $border;
    public bool $shadow;
    public ?string $padding;

    public function __construct(
        ?string $title = null,
        ?string $description = null,
        bool $border = true,
        bool $shadow = true,
        ?string $padding = 'medium'
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->border = $border;
        $this->shadow = $shadow;
        $this->padding = $padding;
    }

    public function render()
    {
        return view('ui::components.card');
    }
}
