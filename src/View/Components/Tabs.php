<?php

namespace TechGeeta\BrandingUI\View\Components;

use Illuminate\View\Component;

class Tabs extends Component
{
    public array $tabs;
    public ?string $activeTab;

    public function __construct(array $tabs, ?string $activeTab = null)
    {
        $this->tabs = $tabs;
        $this->activeTab = $activeTab ?? (isset($tabs[0]) ? $tabs[0]['id'] : null);
    }

    public function render()
    {
        return view('ui::components.tabs');
    }
}
