<?php

namespace TechGeeta\BrandingUI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\AppLayout;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;

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


        // Inject via Vite (auto-inclusion)
        \Illuminate\Support\Facades\Vite::useBuildDirectory('build');
        \Illuminate\Support\Facades\Vite::macro('techGeetaUi', function () {
            return $this->withEntryPoints([
                'resources/css/vendor/ui.css',
            ]);
        });

        // Auto-inject into app.css & app.js (optional for automation)
        $this->injectCssIntoApp();
        $this->injectJsIntoApp();

    }

    public function register()
    {
        //
    }

    protected function injectCssIntoApp()
    {
        $appCss = base_path('resources/css/app.css');
        $injectLine = "@import './vendor/ui.css';";

        if (File::exists($appCss)) {
            $contents = File::get($appCss);
            if (!str_contains($contents, $injectLine)) {
                File::append($appCss, "\n".$injectLine);
            }
        }
    }

    protected function injectJsIntoApp()
    {
        $appJs = base_path('resources/js/app.js');
        $injectLine = "import './vendor/ui.js';";

        if (File::exists($appJs)) {
            $contents = File::get($appJs);
            if (!str_contains($contents, $injectLine)) {
                File::append($appJs, "\n".$injectLine);
            }
        }
    }
}
