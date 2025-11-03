@props(['domainHost' => request()->getHost()])

<nav class="bg-white dark:bg-gray-800 shadow-sm border-b border-gray-200 dark:border-gray-700 sticky top-0 z-50 transition-colors duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo and Brand -->
            <div class="flex items-center">
                <a href="https://techgeeta.com" class="flex items-center space-x-3">
                    {{-- <div class="w-8 h-8 bg-gradient-to-br from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-sm">TG</span>
                    </div> --}}
                    <img
                        src="{{ asset('vendor/ui/assets/images/logo/logo-transparent.png') }}"
                        alt="{{ config('app.name') }} Logo"
                        class="h-14 rounded-lg transition-transform transform hover:scale-105 hidden sm:block"
                    >
                    <img
                        src="{{ asset('vendor/ui/assets/images/logo/logo-landscape-transparent.png') }}"
                        alt="{{ config('app.name') }} Logo"
                        class="h-10 rounded-lg sm:hidden transition-transform transform hover:scale-105"
                    >
                    {{-- <div class="hidden sm:block">
                        <h1 class="text-xl font-bold text-gray-900 dark:text-white">TechGeeta</h1>
                        <p class="text-xs text-gray-500 dark:text-gray-400 -mt-1">Developer Tools</p>
                    </div> --}}
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="https://mvpcost.techgeeta.com" class="nav-link flex gap-1 items-center {{ $domainHost === 'mvpcost.techgeeta.com' ? 'active' : '' }} text-gray-700 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-400">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 7 5-5 5 5"></path>
                    </svg>
                    Startup Budget Estimator
                </a>

                <a href="https://nda.techgeeta.com" class="nav-link flex gap-1 items-center {{ $domainHost === 'nda.techgeeta.com' ? 'active' : '' }} text-gray-700 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <!-- Document outline -->
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 3h9l5 5v13a1 1 0 01-1 1H6a1 1 0 01-1-1V4a1 1 0 011-1z" />
                        <!-- Signature line -->
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 16c.5 1 1.5 1 2-.2s1.5-1.8 2-.5c.5.8 1.5.8 2-.5" />
                    </svg>
                    NDA Generator
                </a>

                <a href="https://equity.techgeeta.com" class="nav-link flex gap-1 items-center {{ $domainHost === 'equity.techgeeta.com' ? 'active' : '' }} text-gray-700 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <!-- Pie chart -->
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                    </svg>
                    Equity Splitter
                    {{-- <x-ui::badge variant="danger" class="ml-1">Beta</x-ui::badge> --}}
                </a>

                <a href="https://linkedin.techgeeta.com" class="nav-link flex gap-1 items-center {{ $domainHost === 'linkedin.techgeeta.com' ? 'active' : '' }} text-gray-700 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-400">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                    LinkedIn Formatter
                </a>
            </div>

            <!-- CTA Button & Theme Switcher -->
            <div class="hidden md:flex items-center space-x-4">
                <!-- Theme Toggle -->
                <x-ui::button 
                    variant="secondary"
                    size="small"
                    id="theme-toggle"
                    title="Toggle theme"
                    class="p-2 w-10 h-10"
                >
                    <!-- Sun Icon (shown in dark mode) -->
                    <svg id="theme-icon-sun" class="w-5 h-5 hidden dark:block" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.591a.75.75 0 101.06 1.06l1.591-1.591zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.591-1.591a.75.75 0 10-1.06 1.06l1.591 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.591a.75.75 0 001.06 1.06l1.591-1.591zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.591-1.591a.75.75 0 00-1.061 1.06l1.591 1.591z"/>
                    </svg>
                    <!-- Moon Icon (shown in light mode) -->
                    <svg id="theme-icon-moon" class="w-5 h-5 block dark:hidden" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd"/>
                    </svg>
                </x-ui::button>

                <x-ui::button variant="secondary" href="https://techgeeta.com/contact">
                    Contact Us
                </x-ui::button>
            </div>            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-toggle" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white focus:outline-none focus:text-gray-900 dark:focus:text-white transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 transition-colors duration-200">
        <div class="px-4 py-3 space-y-3">
            <a href="https://mvpcost.techgeeta.com" class="mobile-nav-link {{ $domainHost === 'mvpcost.techgeeta.com' ? 'active' : '' }} flex items-center text-gray-700 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-400">
                <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 7 5-5 5 5"></path>
                </svg>
                Startup Budget Estimator
            </a>

            <a href="https://nda.techgeeta.com" class="mobile-nav-link {{ $domainHost === 'nda.techgeeta.com' ? 'active' : '' }} flex items-center text-gray-700 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <!-- Document outline -->
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 3h9l5 5v13a1 1 0 01-1 1H6a1 1 0 01-1-1V4a1 1 0 011-1z" />
                    <!-- Signature line -->
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 16c.5 1 1.5 1 2-.2s1.5-1.8 2-.5c.5.8 1.5.8 2-.5" />
                </svg>
                NDA Generator
                {{-- <x-ui::badge variant="soon" class="ml-auto">Soon</x-ui::badge> --}}
            </a>

            <a href="https://equity.techgeeta.com" class="mobile-nav-link {{ $domainHost === 'equity.techgeeta.com' ? 'active' : '' }} flex items-center text-gray-700 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <!-- Pie chart -->
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                </svg>
                Equity Splitter
                {{-- <x-ui::badge variant="danger" class="ml-auto">Beta</x-ui::badge> --}}
            </a>

            <a href="https://linkedin.techgeeta.com" class="mobile-nav-link {{ $domainHost === 'linkedin.techgeeta.com' ? 'active' : '' }} flex items-center text-gray-700 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-400">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
                LinkedIn Formatter
            </a>

            <div class="flex flex-col space-y-3 pt-3 border-t border-gray-200 dark:border-gray-700">
                <!-- Theme Toggle (Mobile) -->
                <button id="theme-toggle-mobile" class="mobile-nav-link flex items-center w-full text-left cursor-pointer text-gray-700 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-400">
                    <!-- Sun Icon (shown in dark mode) -->
                    <svg id="theme-icon-sun-mobile" class="w-4 h-4 mr-2 hidden dark:block text-gray-200 dark:text-gray-50" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.591a.75.75 0 101.06 1.06l1.591-1.591zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.591-1.591a.75.75 0 10-1.06 1.06l1.591-1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.591a.75.75 0 001.06 1.06l1.591-1.591zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.591-1.591a.75.75 0 00-1.061 1.06l1.591 1.591z"/>
                    </svg>
                    <!-- Moon Icon (shown in light mode) -->
                    <svg id="theme-icon-moon-mobile" class="w-4 h-4 mr-2 block dark:hidden text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd"/>
                    </svg>
                    <span id="theme-text-mobile" class="text-gray-700 dark:text-gray-200">Switch to Light Mode</span>
                </button>

                <a href="https://techgeeta.com/contact" class="mobile-nav-link flex items-center text-gray-700 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-400">
                    <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Contact Us
                </a>

            </div>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu functionality
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    mobileMenuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

    // Theme switching functionality
    const themeToggle = document.getElementById('theme-toggle');
    const themeToggleMobile = document.getElementById('theme-toggle-mobile');
    const themeTextMobile = document.getElementById('theme-text-mobile');

    function updateThemeText() {
        const isDark = document.documentElement.classList.contains('dark');
        if (themeTextMobile) {
            themeTextMobile.textContent = isDark ? 'Switch to Light Mode' : 'Switch to Dark Mode';
        }
    }

    function toggleTheme() {
        const currentIsDark = document.documentElement.classList.contains('dark');
        const newTheme = currentIsDark ? 'light' : 'dark';

        // Clear all dark classes first
        document.documentElement.classList.remove('dark');

        // Add dark class if needed
        if (newTheme === 'dark') {
            document.documentElement.classList.add('dark');
        }

        localStorage.setItem('nuxt-color-mode', newTheme);
        window.currentTheme = newTheme;
        updateThemeText();

        // More detailed debug logging
        console.log('Theme toggled to:', newTheme);
        console.log('Has dark class:', document.documentElement.classList.contains('dark'));
        console.log('HTML element classes:', document.documentElement.className);
        console.log('localStorage value:', localStorage.getItem('nuxt-color-mode'));
        console.log('Body bg classes:', document.body.className);
    }

    // Initialize theme text
    updateThemeText();

    // Add event listeners
    if (themeToggle) {
        themeToggle.addEventListener('click', toggleTheme);
    }
    if (themeToggleMobile) {
        themeToggleMobile.addEventListener('click', toggleTheme);
    }
});
</script>
