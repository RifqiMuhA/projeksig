<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WebGIS')</title>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logo/logo-askara.png') }}" type="image/x-icon">
    @yield('styles')
</head> 
<body class="bg-gray-100 min-h-screen flex flex-col">
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0">
                    <a href="/" class="text-3xl font-extrabold text-purple-600">
                        WebGIS
                    </a>
                </div>
                <div class="absolute left-1/2 transform -translate-x-1/2 hidden sm:flex space-x-6">
                    <a href="/" class="text-gray-900 hover:text-purple-600 px-3 py-2 rounded-lg text-sm font-semibold transition-all duration-300 {{ request()->is('/') ? 'bg-purple-50 text-purple-600' : '' }}">
                        <i class="fas fa-home mr-2"></i>Home
                    </a>
                    <a href="/about" class="text-gray-900 hover:text-purple-600 px-3 py-2 rounded-lg text-sm font-semibold transition-all duration-300 {{ request()->is('about') ? 'bg-purple-50 text-purple-600' : '' }}">
                        <i class="fas fa-info-circle mr-2"></i>About
                    </a>
                    <a href="/map" class="text-gray-900 hover:text-purple-600 px-3 py-2 rounded-lg text-sm font-semibold transition-all duration-300 {{ (request()->is('map') || request()->is('map/*')) ? 'bg-purple-50 text-purple-600' : '' }}">
                        <i class="fas fa-map-marked-alt mr-2"></i>Peta Sebaran
                    </a>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="hidden sm:hidden mobile-menu">
            <div class="pt-2 pb-3 space-y-1 bg-white shadow-md">
                <a href="/" class="text-gray-900 hover:bg-gray-200 block px-3 py-2 rounded-md text-base font-medium">
                    <i class="fas fa-home mr-2"></i>Home
                </a>
                <a href="/about" class="text-gray-900 hover:bg-gray-200 block px-3 py-2 rounded-md text-base font-medium">
                    <i class="fas fa-info-circle mr-2"></i>About
                </a>
                <a href="/map" class="text-gray-900 hover:bg-gray-200 block px-3 py-2 rounded-md text-base font-medium">
                    <i class="fas fa-map-marked-alt mr-2"></i>Peta Sebaran
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow container mx-auto">
        @yield('content')
    </main>

    <footer class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-center md:text-left mb-4 md:mb-0">
                    <h3 class="text-xl font-bold text-purple-600">
                        WebGIS 
                    </h3>
                    <p class="text-gray-600 mt-2">
                        © {{ date('Y') }} All rights reserved.
                    </p>
                </div>
                <div class="flex space-x-4">
                    <a href="https://www.instagram.com/_rifqimuh" class="text-gray-600 hover:text-purple-600 transition-colors duration-300" target="_blank">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/rifqi-muhadzib-ahdan-85749821b/" class="text-gray-600 hover:text-purple-600 transition-colors duration-300" target="_blank">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>
    @yield('scripts')
</body>
</html>