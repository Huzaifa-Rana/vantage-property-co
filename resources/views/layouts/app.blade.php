<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Vantage Property Co') | Elite Real Estate</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%232563eb'><path d='M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'/></svg>">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#0f172a',
                        accent: '#f59e0b',
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                        display: ['Inter', 'sans-serif'],
                    },
                    borderRadius: {
                        'premium': '1.5rem',
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer utilities {
            .glass {
                @apply bg-white/70 backdrop-blur-lg border border-white/20 shadow-xl;
            }
            
            .glass-dark {
                @apply bg-slate-900/70 backdrop-blur-lg border border-slate-700/50 shadow-2xl;
            }

            .text-gradient {
                @apply bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600;
            }

            .premium-shadow {
                box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.05), 0 8px 10px -6px rgb(0 0 0 / 0.05);
            }
        }
    </style>
</head>
<body class="antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <nav class="fixed w-full z-50 transition-all duration-300 px-6 py-4" id="main-nav">
            <div class="max-w-7xl mx-auto flex items-center justify-between glass rounded-full px-8 py-3">
                <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white shadow-lg group-hover:rotate-12 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-slate-800">Vantage<span class="text-primary">Properties</span></span>
                </a>

                <div class="hidden md:flex items-center gap-8 font-medium text-slate-600">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-primary' : '' }} hover:text-primary transition-colors">Home</a>
                    <a href="{{ route('properties.index') }}" class="{{ request()->routeIs('properties.*') ? 'text-primary' : '' }} hover:text-primary transition-colors">Find a Home</a>
                    <a href="{{ route('agents') }}" class="{{ request()->routeIs('agents') ? 'text-primary' : '' }} hover:text-primary transition-colors">Agents</a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-primary' : '' }} hover:text-primary transition-colors">About</a>
                </div>

                <div class="flex items-center gap-4">
                    <a href="{{ route('properties.index') }}" class="hidden lg:block bg-slate-900 text-white px-6 py-2.5 rounded-full font-semibold hover:bg-slate-800 transition-all shadow-lg hover:-translate-y-0.5">
                        List Your Property
                    </a>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-grow pt-24">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-slate-900 text-slate-300 py-20 px-6">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <span class="text-2xl font-bold text-white">Vantage</span>
                    </div>
                    <p class="text-slate-400 mb-8 max-w-md">
                        Connecting elite buyers with premium properties across the globe. Our technology-driven approach ensures a seamless and professional experience.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 italic">Quick Links</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-white transition-colors">Properties</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Our Process</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Agent Login</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Newsletter</h4>
                    <p class="text-sm text-slate-400 mb-4">Subscribe for curated property listings.</p>
                    <div class="flex gap-2">
                        <input type="email" placeholder="Email address" class="bg-slate-800 border-none rounded-lg px-4 py-2 w-full focus:ring-2 focus:ring-primary">
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="max-w-7xl mx-auto border-t border-slate-800 mt-20 pt-8 text-center text-sm text-slate-500">
                &copy; {{ date('Y') }} Vantage Property Co. Handcrafted for excellence.
            </div>
        </footer>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-out-quad'
        });

        // Nav scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.getElementById('main-nav');
            if (window.scrollY > 50) {
                nav.classList.remove('py-4');
                nav.classList.add('py-2', 'bg-white/10', 'backdrop-blur-md');
            } else {
                nav.classList.remove('py-2', 'bg-white/10', 'backdrop-blur-md');
                nav.classList.add('py-4');
            }
        });
    </script>
</body>
</html>
