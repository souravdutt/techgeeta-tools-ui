<?php

namespace TechGeeta\BrandingUI\View\Components;

use Illuminate\View\Component;

class TabPanel extends Component
{
    public string $id;
    public bool $active;

    public function __construct(string $id, bool $active = false)
    {
        $this->id = $id;
        $this->active = $active;
    }

    public function render()
    {
        return view('ui::components.tab-panel');
    }
}
