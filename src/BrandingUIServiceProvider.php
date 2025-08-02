<?php

namespace TechGeeta\BrandingUI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\AppLayout;

class BrandingUIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'branding-ui');

        $this->loadViewComponentsAs('ui', [
            \TechGeeta\BrandingUI\View\Components\AppLayout::class,
            \TechGeeta\BrandingUI\View\Components\EmailLayout::class,
            \TechGeeta\BrandingUI\View\Components\Navigation::class,
            \TechGeeta\BrandingUI\View\Components\Footer::class,
            \TechGeeta\BrandingUI\View\Components\RadioGroup::class,
            // Add others as needed
        ]);

        $this->publishes([
            __DIR__.'/../resources/css/branding.css' => public_path('vendor/branding-ui/branding.css'),
        ], 'branding-ui-assets');

        $this->publishes([
            __DIR__.'/../public/assets' => public_path('vendor/branding-ui/assets'),
        ], 'branding-ui-assets');
    }

    public function register()
    {
        //
    }
}
