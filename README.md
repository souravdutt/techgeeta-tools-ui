# TechGeeta Tools UI - Component Library

A comprehensive Laravel Blade component library for maintaining consistent branding across all TechGeeta tools.

## Overview

This package has been transformed from a utility class-based approach to a robust component-based system. Instead of using CSS classes like `.btn-primary` or `.card`, you now use Blade components like `<x-ui::button>` and `<x-ui::card>`.

# TechGeeta Tools UI - Component Library

A comprehensive Laravel Blade component library for maintaining consistent branding across all TechGeeta tools.

## Overview

This package has been transformed from a utility class-based approach to a robust component-based system. Instead of using CSS classes like `.btn-primary` or `.card`, you now use Blade components like `<x-ui::button>` and `<x-ui::card>`.

## 🔧 Installation

1. Install via Composer:
```bash
composer require souravdutt/techgeeta-tools-ui
```

2. Publish assets:
```bash
php artisan vendor:publish --tag=ui
```

3. The components are automatically registered and ready to use.
```blade
<x-ui::app-layout>
    <!-- Your content -->
</x-ui::app-layout>
```

## 📁 Local Development Setup (Symlink Path Repository)

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

## 🧩 Available Components

### Button Component

```blade
<!-- Basic button -->
<x-ui::button>Click me</x-ui::button>

<!-- Button variants -->
<x-ui::button variant="primary">Primary</x-ui::button>
<x-ui::button variant="secondary">Secondary</x-ui::button>
<x-ui::button variant="success">Success</x-ui::button>
<x-ui::button variant="danger">Danger</x-ui::button>
<x-ui::button variant="warning">Warning</x-ui::button>
<x-ui::button variant="outline">Outline</x-ui::button>
<x-ui::button variant="ghost">Ghost</x-ui::button>

<!-- Button sizes -->
<x-ui::button size="small">Small</x-ui::button>
<x-ui::button size="medium">Medium</x-ui::button>
<x-ui::button size="large">Large</x-ui::button>

<!-- Button as link -->
<x-ui::button href="/dashboard">Go to Dashboard</x-ui::button>

<!-- Disabled button -->
<x-ui::button disabled>Disabled</x-ui::button>

<!-- Button with icon -->
<x-ui::button icon="<svg>...</svg>" icon-position="left">With Icon</x-ui::button>
```

### Input Component

```blade
<!-- Basic input -->
<x-ui::input name="email" type="email" label="Email Address" />

<!-- Input with validation error -->
<x-ui::input 
    name="password" 
    type="password" 
    label="Password" 
    error="Password is required"
    required 
/>

<!-- Input with help text -->
<x-ui::input 
    name="username" 
    label="Username" 
    help="Must be unique and at least 3 characters"
    placeholder="Enter username"
/>
```

### Card Component

```blade
<!-- Basic card -->
<x-ui::card>
    <p>Card content goes here</p>
</x-ui::card>

<!-- Card with title and description -->
<x-ui::card title="Settings" description="Manage your account settings">
    <p>Settings form would go here</p>
</x-ui::card>

<!-- Card without border or shadow -->
<x-ui::card :border="false" :shadow="false">
    <p>Clean card content</p>
</x-ui::card>

<!-- Card with different padding -->
<x-ui::card padding="large">
    <p>Card with large padding</p>
</x-ui::card>
```

### Modal Component

```blade
<!-- Basic modal -->
<x-ui::modal id="example-modal" title="Example Modal">
    <p>Modal content goes here</p>
    
    <div class="mt-4 flex justify-end space-x-2">
        <x-ui::button variant="secondary" onclick="closeModal('example-modal')">
            Cancel
        </x-ui::button>
        <x-ui::button>Save</x-ui::button>
    </div>
</x-ui::modal>

<!-- Trigger button -->
<x-ui::button onclick="openModal('example-modal')">
    Open Modal
</x-ui::button>

<!-- Different sizes -->
<x-ui::modal id="large-modal" size="large" title="Large Modal">
    <!-- Content -->
</x-ui::modal>
```

### Tabs Component

```blade
<!-- Define tabs -->
@php
$tabs = [
    ['id' => 'tab1', 'title' => 'General', 'icon' => '<svg>...</svg>'],
    ['id' => 'tab2', 'title' => 'Security', 'badge' => '2'],
    ['id' => 'tab3', 'title' => 'Billing']
];
@endphp

<x-ui::tabs :tabs="$tabs" active-tab="tab1">
    <x-ui::tab-panel id="tab1" active>
        <h3>General Settings</h3>
        <p>General settings content...</p>
    </x-ui::tab-panel>
    
    <x-ui::tab-panel id="tab2">
        <h3>Security Settings</h3>
        <p>Security settings content...</p>
    </x-ui::tab-panel>
    
    <x-ui::tab-panel id="tab3">
        <h3>Billing Settings</h3>
        <p>Billing settings content...</p>
    </x-ui::tab-panel>
</x-ui::tabs>
```

### Badge Component

```blade
<!-- Different variants -->
<x-ui::badge>Default</x-ui::badge>
<x-ui::badge variant="primary">Primary</x-ui::badge>
<x-ui::badge variant="success">Success</x-ui::badge>
<x-ui::badge variant="danger">Danger</x-ui::badge>
<x-ui::badge variant="warning">Warning</x-ui::badge>
<x-ui::badge variant="soon">Coming Soon</x-ui::badge>

<!-- Different sizes -->
<x-ui::badge size="small">Small</x-ui::badge>
<x-ui::badge size="large">Large</x-ui::badge>
```

### Alert Component

```blade
<!-- Different types -->
<x-ui::alert type="success" title="Success!">
    Your changes have been saved successfully.
</x-ui::alert>

<x-ui::alert type="error" dismissible>
    There was an error processing your request.
</x-ui::alert>

<x-ui::alert type="warning">
    Your trial expires in 3 days.
</x-ui::alert>

<x-ui::alert type="info">
    New features are available in the dashboard.
</x-ui::alert>
```

### Dropdown Component

```blade
<x-ui::dropdown align="right" width="56">
    <x-slot name="trigger">
        <span>Options</span>
    </x-slot>
    
    <x-ui::dropdown-item href="/profile">
        Profile
    </x-ui::dropdown-item>
    
    <x-ui::dropdown-item href="/settings">
        Settings
    </x-ui::dropdown-item>
    
    <x-ui::dropdown-item onclick="logout()">
        Logout
    </x-ui::dropdown-item>
</x-ui::dropdown>
```

### Toggle Component

```blade
<!-- Basic toggle -->
<x-ui::toggle name="notifications" label="Email Notifications" />

<!-- Pre-checked toggle -->
<x-ui::toggle name="dark_mode" label="Dark Mode" checked />

<!-- Disabled toggle -->
<x-ui::toggle name="feature" label="Beta Features" disabled />
```

### Radio Group Component (Enhanced)

```blade
@php
$platformOptions = [
    'web' => [
        'label' => 'Web Application',
        'description' => 'Browser-based application'
    ],
    'mobile' => [
        'label' => 'Mobile App',
        'description' => 'iOS and Android application'
    ]
];
@endphp

<x-ui::radio-group 
    name="platform"
    label="Platform Type"
    :options="$platformOptions"
    icon="🚀"
    description="Choose your target platform"
/>
```

### Layout Components

```blade
<!-- App Layout (Main layout for tools) -->
<x-ui::app-layout title="Tool Name" description="Tool description">
    <!-- Your tool content -->
</x-ui::app-layout>

<!-- Navigation (automatically included in app-layout) -->
<x-ui::navigation />

<!-- Footer (automatically included in app-layout) -->
<x-ui::footer />
```

## 🎨 Utility Classes Still Available

Some utility classes are still provided for common layouts:

```blade
<!-- Container classes -->
<div class="container-app">Max width with padding</div>
<div class="container-narrow">Narrow container</div>
<div class="container-wide">Wide container</div>

<!-- Section spacing -->
<section class="section">Standard section</section>
<section class="section-large">Large section</section>
<section class="section-small">Small section</section>
```

## 🌙 Dark Mode Support

All components automatically support dark mode through Tailwind's dark mode classes. The theme is controlled by the app layout component.

## 🎛️ Styling Customization

Components use Tailwind CSS classes for styling. You can customize appearance by:

1. Extending component classes in your app's CSS
2. Using Tailwind's configuration for theme customization  
3. Overriding component templates by publishing views

## 🔄 Migration from Class-Based Approach

### Before (Class-based):
```blade
<button class="btn-primary btn-large">
    Save Changes
</button>

<div class="card">
    <h3 class="card-title">Title</h3>
    <p class="card-description">Description</p>
    <div class="card-content">Content</div>
</div>
```

### After (Component-based):
```blade
<x-ui::button variant="primary" size="large">
    Save Changes
</x-ui::button>

<x-ui::card title="Title" description="Description">
    Content
</x-ui::card>
```

## ✨ Benefits

1. **Type Safety**: Components provide better IDE support and error checking
2. **Consistency**: Enforced design patterns across all tools
3. **Maintainability**: Changes to components automatically propagate to all tools
4. **Flexibility**: Easy to extend and customize components
5. **Accessibility**: Built-in ARIA attributes and keyboard navigation
6. **Dark Mode**: Automatic dark mode support
7. **Developer Experience**: Better IntelliSense and auto-completion

## 🤝 Contributing

When adding new components:

1. Create the PHP component class in `src/View/Components/`
2. Create the Blade template in `resources/views/components/`
3. Register the component in `BrandingUIServiceProvider.php`
4. Add documentation and examples to this README

## 📄 License

This package is proprietary to TechGeeta and is intended for use across TechGeeta tools only.


## 🛠 Development Workflow
- Package autoloads views from: `src/resources/views`

- Components live under: `TechGeeta\BrandingUI\View\Components`

- Namespace prefix: `ui::`

## 🚀 Publishing for Production
To publish assets or configs (if applicable):
```bash
php artisan vendor:publish --tag=ui --force
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
