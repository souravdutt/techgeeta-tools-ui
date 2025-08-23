<?php

namespace TechGeeta\BrandingUI\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public string $type;
    public ?string $title;
    public bool $dismissible;

    public function __construct(string $type = 'info', ?string $title = null, bool $dismissible = false)
    {
        $this->type = $type;
        $this->title = $title;
        $this->dismissible = $dismissible;
    }

    public function render()
    {
        return view('ui::components.alert');
    }
}
