@props(['title' => null, 'description' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('vendor/branding-ui/assets/images/logo/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />

    <!-- Open Graph / Social Media -->
    @hasSection('seo')
        @yield('seo')
    @else
        <title>{{ $title ?? 'TechGeeta Tools' }} - {{ config('app.name', 'TechGeeta') }}</title>
        <meta name="description" content="{{ $description ?? 'Professional tools for startups and developers by TechGeeta' }}">
        <meta property="og:title" content="{{ $title ?? 'TechGeeta Tools' }}">
        <meta property="og:description" content="{{ $description ?? 'Professional tools for startups and developers' }}">
        <meta property="og:url" content="{{ url()->current() }}">
    @endif
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional Head Content -->
    @stack('head')

    <!-- Theme Script (must be in head to prevent FOUC) -->
    <script>
        // Initialize theme immediately to prevent flash
        (function() {
            const theme = localStorage.getItem('nuxt-color-mode') || 'dark';
            const isDark = theme === 'dark';

            console.log('Theme initialization:', { theme, isDark });

            // Clear any existing classes
            document.documentElement.classList.remove('dark');

            // Add dark class if needed
            if (isDark) {
                document.documentElement.classList.add('dark');
            }

            // Store the theme state globally for other scripts to access
            window.currentTheme = theme;

            console.log('HTML classes after init:', document.documentElement.className);
        })();
    </script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen font-sans antialiased transition-colors duration-200 overflow-x-hidden">
    <!-- Navigation -->
    <x-ui::navigation />

    <!-- Main Content -->
    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-ui::app-footer />

    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>
