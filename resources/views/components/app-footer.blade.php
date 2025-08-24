<!-- Footer -->
<footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 mt-16 transition-colors duration-200">
    <div class="container-app py-12">
        <!-- Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <!-- Brand Section -->
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center space-x-1 mb-4">
                    <img
                        src="{{ asset('vendor/ui/assets/images/logo/logo-transparent.png') }}"
                        alt="{{ config('app.name') }} Logo"
                        class="h-10 transition-transform transform hover:scale-105 hidden sm:block"
                    >
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">TechGeeta</h3>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-300 mb-4 max-w-md">
                    Professional tools and services for startups and developers. We help you build, scale, and optimize your digital products with industry-standard practices.
                </p>
                <div class="flex items-center space-x-4">
                    <span class="flex items-center text-sm text-gray-600 dark:text-gray-300">
                        <x-ui::badge variant="success" size="small" class="mr-2">✓</x-ui::badge>
                        Industry-standard pricing
                    </span>
                    <span class="flex items-center text-sm text-gray-600 dark:text-gray-300">
                        <x-ui::badge variant="success" size="small" class="mr-2">✓</x-ui::badge>
                        Real development experience
                    </span>
                </div>
            </div>

            <!-- Tools Section -->
            <div>
                <h4 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wider mb-4">Tools</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="https://mvpcost.techgeeta.com" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            Startup Budget Estimator
                        </a>
                    </li>
                    <li>
                        <a href="https://nda.techgeeta.com" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            NDA Generator
                            {{-- <x-ui::badge variant="soon" size="small" class="ml-2">Soon</x-ui::badge> --}}
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Company Section -->
            <div>
                <h4 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wider mb-4">Company</h4>
                <ul class="space-y-3">
                    <li><a href="https://techgeeta.com/about" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">About Us</a></li>
                    <li><a href="https://techgeeta.com/blog" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Blogs</a></li>
                    <li><a href="https://techgeeta.com/contact" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="pt-8 border-t border-gray-200">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6">
                    <p class="text-gray-500 text-sm">
                        &copy; {{ date('Y') }} TechGeeta. All rights reserved.
                    </p>
                    <div class="flex items-center space-x-4 text-sm">
                        <a href="https://techgeeta.com/privacy-policy" class="text-gray-500 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Privacy Policy</a>
                        <a href="https://techgeeta.com/disclaimer" class="text-gray-500 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Disclaimer</a>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-500">Follow us:</span>
                    <a href="https://x.com/souravdutt07"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                    <a href="https://linkedin.com/in/souravdutt"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.327-.027-3.033-1.85-3.033-1.85 0-2.134 1.445-2.134 2.938v5.664H9.355V9h3.413v1.561h.049c.477-.9 1.64-1.85 3.37-1.85 3.6 0 4.267 2.37 4.267 5.45v6.291zM5.337 7a2.07 2.07 0 110-4.14 2.07 2.07 0 010 4.14zm1.77 13.452H3.567V9h3.54v11.452z"></path>
                        </svg>
                    </a>
                    <a href="https://github.com/souravdutt"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 5.25 3.438 9.625 8.207 11.148.6.111.793-.261.793-.577 0-.287-.011-1.045-.016-2.052-3.338.724-4.043-1.607-4.043-1.607-.546-1.384-1.333-1.754-1.333-1.754-1.089-.743.083-.728.083-.728 1.205.085 1.838 1.237 1.838 1.237 1.07 1.832 2.805 1.303 3.49.996.108-.775.42-1.303.763-1.603-2.665-.303-5.466-1.333-5.466-5.933 0-1.313.469-2.386 1.236-3.22-.124-.303-.536-1.53.117-3.185 0 0 1.008-.323 3.303 1.23.957-.266 1.986-.399 3.006-.404 1.02.005 2.049.138 3.006.404 2.295-1.553 3.303-1.23 3.303-1.23.653 1.655.241 2.882.118 3.185.769.834 1.236 1.907 1.236 3.22 0 4.607-2.805 5.63-5.475 5.93.43.37.815 1.096.815 2.209 0 1.594-.014 2.878-.014 3.265 0 .318.192.694.798.577C20.563 21.625 24 17.25 24 12c0-6.627-5.373-12-12-12z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
