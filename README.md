# TechGeeta Tools UI

Reusable UI components and branding assets for all TechGeeta internal tools and SaaS platforms.

## 🔧 Installation (Inside a Laravel Project)

1. Add the UI package as a local dependency:
    ```bash
    composer require souravdutt/techgeeta-tools-ui:^1.0
    ```

2. Run the vendor publish command to publish assets:
    ```bash
    php artisan vendor:publish --tag=ui
    ```

3. Use Blade components like this:
    ```blade
    <x-ui::app-layout>
        <!-- Your content -->
    </x-ui::app-layout>
    ```


## 🛠 Development Workflow
- Package autoloads views from: `src/resources/views`

- Components live under: `TechGeeta\BrandingUI\View\Components`

- Namespace prefix: `ui::`

## 🚀 Publishing for Production
To publish assets or configs (if applicable):
```bash
php artisan vendor:publish --tag=branding-ui-assets --force
```

## 📁 Local Package Usage (Symlink Path Repository)
Make sure your main app's composer.json includes:
```json
"repositories": [
  {
    "type": "path",
    "url": "../techgeeta-tools-ui",
    "options": {
      "symlink": true
    }
  }
]
```
