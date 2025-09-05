<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GPDI - Gereja Pentakosta Di Indonesia')</title>
    <meta name="description" content="Website resmi GPDI - Gereja Pentakosta Di Indonesia. Temukan informasi tentang gereja kami, jadwal ibadah, dan pelayanan.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .font-poppins { font-family: 'Poppins', sans-serif; }
        .font-inter { font-family: 'Inter', sans-serif; }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #ffffff;
        }
        ::-webkit-scrollbar-thumb {
            background: #3b82f6;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #dc2626;
        }
        
        /* Smooth transitions */
        * {
            transition: all 0.3s ease;
        }
        
        /* Tab styling */
        .tab-button {
            position: relative;
            overflow: hidden;
        }
        
        .tab-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .tab-button:hover::before {
            left: 100%;
        }
        
        .tab-content {
            animation: fadeIn 0.3s ease-in-out;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <script>
        // Apply saved theme early to avoid flash
        (function() {
            try {
                const saved = localStorage.getItem('theme');
                const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
                const mode = saved || (prefersDark ? 'dark' : 'light');
                if (mode === 'dark') {
                    document.documentElement.classList.add('user-dark');
                }
            } catch (e) {}
        })();
    </script>
</head>
<body class="font-inter bg-white text-blue-900">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-blue-200/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-red-400 rounded-lg flex items-center justify-center">
                        <i class="fas fa-cross text-white text-lg"></i>
                    </div>
                    <span class="font-poppins font-bold text-xl text-blue-900">GPDI</span>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-blue-700 hover:text-blue-600 hover:underline decoration-red-400 underline-offset-4 font-medium transition-colors">Beranda</a>
                    <a href="#about" class="text-blue-700 hover:text-blue-600 hover:underline decoration-red-400 underline-offset-4 font-medium transition-colors">Tentang</a>
                    <a href="#services" class="text-blue-700 hover:text-blue-600 hover:underline decoration-red-400 underline-offset-4 font-medium transition-colors">Pelayanan</a>
                    <a href="#events" class="text-blue-700 hover:text-blue-600 hover:underline decoration-red-400 underline-offset-4 font-medium transition-colors">Acara</a>
                    <a href="#contact" class="text-blue-700 hover:text-blue-600 hover:underline decoration-red-400 underline-offset-4 font-medium transition-colors">Kontak</a>
                </div>
                
                <!-- CTA Button + Theme Toggle -->
                <div class="hidden md:flex items-center space-x-3">
                    <button id="theme-toggle" class="w-10 h-10 rounded-full border border-blue-200 flex items-center justify-center text-blue-700 hover:text-blue-600 hover:border-blue-300 transition" aria-label="Toggle theme">
                        <i class="fas fa-moon"></i>
                    </button>
                    <a href="#contact" class="bg-gradient-to-r from-blue-400 to-red-400 text-white px-6 py-2 rounded-full font-medium ring-2 ring-blue-100 hover:shadow-lg hover:scale-105 transition-all">
                        Bergabung
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-blue-700 hover:text-blue-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-blue-200">
            <div class="px-4 py-6 space-y-4">
                <a href="#home" class="block text-blue-700 hover:text-blue-600 hover:underline decoration-red-500 underline-offset-4 font-medium py-2">Beranda</a>
                <a href="#about" class="block text-blue-700 hover:text-blue-600 hover:underline decoration-red-500 underline-offset-4 font-medium py-2">Tentang</a>
                <a href="#services" class="block text-blue-700 hover:text-blue-600 hover:underline decoration-red-500 underline-offset-4 font-medium py-2">Pelayanan</a>
                <a href="#events" class="block text-blue-700 hover:text-blue-600 hover:underline decoration-red-500 underline-offset-4 font-medium py-2">Acara</a>
                <a href="#contact" class="block text-blue-700 hover:text-blue-600 hover:underline decoration-red-500 underline-offset-4 font-medium py-2">Kontak</a>
                <a href="#contact" class="block bg-gradient-to-r from-blue-400 to-red-400 text-white px-6 py-3 rounded-full font-medium text-center ring-2 ring-blue-100">
                    Bergabung
                </a>
                <button id="theme-toggle-mobile" class="w-full border border-blue-200 text-blue-700 px-6 py-3 rounded-full font-medium text-center hover:bg-blue-50 transition" aria-label="Toggle theme">
                    <i class="fas fa-moon mr-2"></i>Ganti Tema
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-blue-700 to-red-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Brand -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-red-400 rounded-lg flex items-center justify-center">
                            <i class="fas fa-cross text-white text-xl"></i>
                        </div>
                        <span class="font-poppins font-bold text-2xl">GPDI</span>
                    </div>
                    <p class="text-blue-100 mb-4 max-w-md">
                        Gereja Pentakosta Di Indonesia - Membawa kasih Kristus dan harapan Injil ke seluruh bangsa.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white/70 hover:text-red-300 transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-white/70 hover:text-red-300 transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-white/70 hover:text-red-300 transition-colors">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="font-poppins font-semibold text-lg mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#about" class="text-blue-100 hover:text-red-300 transition-colors">Tentang Kami</a></li>
                        <li><a href="#services" class="text-blue-100 hover:text-red-300 transition-colors">Pelayanan</a></li>
                        <li><a href="#events" class="text-blue-100 hover:text-red-300 transition-colors">Acara</a></li>
                        <li><a href="#contact" class="text-blue-100 hover:text-red-300 transition-colors">Kontak</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="font-poppins font-semibold text-lg mb-4">Kontak</h3>
                    <div class="space-y-2 text-blue-100">
                        <p><i class="fas fa-map-marker-alt mr-2"></i> Jakarta, Indonesia</p>
                        <p><i class="fas fa-phone mr-2"></i> +62 21 1234 5678</p>
                        <p><i class="fas fa-envelope mr-2"></i> info@gpdi.org</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-red-700/40 mt-8 pt-8 text-center text-blue-100">
                <p>&copy; 2024 GPDI. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('bg-white/95', 'shadow-lg');
            } else {
                nav.classList.remove('bg-white/95', 'shadow-lg');
            }
        });
        
        // Vision & Mission Tab Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const visionTab = document.getElementById('vision-tab');
            const missionTab = document.getElementById('mission-tab');
            const visionContent = document.getElementById('vision-content');
            const missionContent = document.getElementById('mission-content');
            
            if (visionTab && missionTab && visionContent && missionContent) {
                // Function to switch tabs
                function switchTab(activeTab, activeContent, inactiveTab, inactiveContent) {
                    // Remove active class from all tabs
                    document.querySelectorAll('.tab-button').forEach(btn => {
                        btn.classList.remove('active', 'bg-white', 'text-blue-600', 'shadow-sm');
                        btn.classList.add('text-gray-600');
                    });
                    
                    // Hide all content
                    document.querySelectorAll('.tab-content').forEach(content => {
                        content.classList.add('hidden');
                    });
                    
                    // Activate selected tab
                    activeTab.classList.add('active', 'bg-white', 'text-blue-600', 'shadow-sm');
                    activeTab.classList.remove('text-gray-600');
                    
                    // Show selected content
                    activeContent.classList.remove('hidden');
                }
                
                // Vision tab click event
                visionTab.addEventListener('click', function() {
                    switchTab(visionTab, visionContent, missionTab, missionContent);
                });
                
                // Mission tab click event
                missionTab.addEventListener('click', function() {
                    switchTab(missionTab, missionContent, visionTab, visionContent);
                });
            }
        });
    </script>
</body>
</html>
