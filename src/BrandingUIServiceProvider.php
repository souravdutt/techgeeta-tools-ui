<?php

namespace TechGeeta\BrandingUI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\AppLayout;

class BrandingUIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ui');

        $this->loadViewComponentsAs('ui', [
            \TechGeeta\BrandingUI\View\Components\AppLayout::class,
            \TechGeeta\BrandingUI\View\Components\EmailLayout::class,
            \TechGeeta\BrandingUI\View\Components\Navigation::class,
            \TechGeeta\BrandingUI\View\Components\Footer::class,
            \TechGeeta\BrandingUI\View\Components\RadioGroup::class,
            // Add others as needed
        ]);

        $this->publishes([
            __DIR__.'/../resources/css/ui.css' => base_path('resources/css/vendor/ui.css'),
            __DIR__.'/../resources/js/ui.js' => base_path('resources/js/vendor/ui.js'),
            __DIR__.'/../public/assets' => public_path('/vendor/ui/assets'),
        ], 'ui');

        $this->publishes([
            __DIR__.'/../public/assets' => public_path('/vendor/ui/assets'),
        ], 'ui-assets');
    }

    public function register()
    {
        //
    }
}
