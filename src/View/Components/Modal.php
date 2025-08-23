<?php

namespace TechGeeta\BrandingUI\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public string $id;
    public ?string $title;
    public string $size;
    public bool $closeable;

    public function __construct(
        string $id,
        ?string $title = null,
        string $size = 'medium',
        bool $closeable = true
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->size = $size;
        $this->closeable = $closeable;
    }

    public function render()
    {
        return view('ui::components.modal');
    }
}
