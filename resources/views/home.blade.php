@extends('layouts.app')

@section('title', 'GPDI - Gereja Pentakosta Di Indonesia')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background with gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/70 via-blue-500/50 to-red-500/45"></div>
        
        <!-- Animated background elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-300/15 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-red-300/15 rounded-full blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-blue-200/10 rounded-full blur-3xl animate-pulse delay-500"></div>
        </div>
        
        <!-- Content -->
        <div class="relative z-10 text-center text-white px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
            <div data-aos="fade-up" data-aos-delay="200">
                <h1 class="font-poppins font-bold text-4xl sm:text-5xl lg:text-6xl mb-6 leading-tight">
                    Selamat Datang di
                    <span class="block bg-gradient-to-r from-[#b08968] to-[#e6ccb2] bg-clip-text text-transparent">
                        GPDI
                    </span>
                </h1>
                <p class="text-xl sm:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Gereja Pentakosta Di Indonesia - Membawa kasih Kristus dan harapan Injil ke seluruh bangsa melalui pelayanan yang penuh kasih dan dedikasi.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#about" class="bg-gradient-to-r from-blue-400 to-red-400 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
                        Pelajari Lebih Lanjut
                    </a>
                    <a href="#contact" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-blue-900 transition-all duration-300">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-white/80 hover:text-white transition-colors">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-4">
                    Tentang <span class="text-blue-600">GPDI</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    GPDI adalah gereja yang berkomitmen untuk membawa transformasi spiritual dan sosial melalui pelayanan yang penuh kasih dan dedikasi.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="relative">
                        <div class="w-full h-96 bg-gradient-to-br from-blue-400 to-red-400 rounded-2xl shadow-2xl"></div>
                        <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-red-400 rounded-full flex items-center justify-center shadow-xl">
                            <i class="fas fa-pray text-4xl text-white"></i>
                        </div>
                    </div>
                </div>
                
                <div data-aos="fade-left">
                    <h3 class="font-poppins font-bold text-3xl text-gray-900 mb-6">
                        Visi & Misi Kami
                    </h3>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        GPDI berkomitmen untuk menjadi gereja yang relevan, inklusif, dan transformatif dalam masyarakat Indonesia. Kami percaya bahwa setiap orang berharga di mata Tuhan dan berhak untuk mengalami kasih-Nya.
                    </p>
                    
                    <!-- Tab Navigation -->
                    <div class="flex space-x-1 bg-gray-100 p-1 rounded-lg mb-6 vm-tabs">
                        <button id="vision-tab" class="tab-button active flex-1 py-3 px-4 text-center font-medium rounded-md transition-all duration-300 bg-white text-blue-600 shadow-sm">
                            <i class="fas fa-eye mr-2"></i>Visi
                        </button>
                        <button id="mission-tab" class="tab-button flex-1 py-3 px-4 text-center font-medium rounded-md transition-all duration-300 text-gray-600 hover:text-blue-600">
                            <i class="fas fa-bullseye mr-2"></i>Misi
                        </button>
                    </div>
                    
                    <!-- Tab Content -->
                    <div id="vision-content" class="tab-content">
                        <div class="bg-gradient-to-br from-blue-50 to-red-50 rounded-xl p-6 border-l-4 border-blue-300 vm-card">
                            <h4 class="font-poppins font-bold text-xl text-blue-900 mb-4 flex items-center">
                                <i class="fas fa-eye text-blue-600 mr-3"></i>
                                Visi GPDI
                            </h4>
                            <p class="text-lg text-blue-800 leading-relaxed mb-4">
                                "Menjadi gereja yang transformatif, relevan, dan berdampak positif dalam membangun kerajaan Allah di Indonesia melalui pelayanan yang penuh kasih, inovatif, dan berkelanjutan."
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <i class="fas fa-check text-white text-xs"></i>
                                    </div>
                                    <span class="text-blue-700 font-medium">Transformasi Spiritual</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <i class="fas fa-check text-white text-xs"></i>
                                    </div>
                                    <span class="text-blue-700 font-medium">Relevansi Kontekstual</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <i class="fas fa-check text-white text-xs"></i>
                                    </div>
                                    <span class="text-blue-700 font-medium">Dampak Sosial</span>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <i class="fas fa-check text-white text-xs"></i>
                                    </div>
                                    <span class="text-blue-700 font-medium">Pelayanan Berkelanjutan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="mission-content" class="tab-content hidden">
                        <div class="bg-gradient-to-br from-blue-50 to-red-50 rounded-xl p-6 border-l-4 border-red-300 vm-card">
                            <h4 class="font-poppins font-bold text-xl text-red-900 mb-4 flex items-center">
                                <i class="fas fa-bullseye text-red-600 mr-3"></i>
                                Misi GPDI
                            </h4>
                            <p class="text-lg text-red-800 leading-relaxed mb-6">
                                "Membawa kabar baik tentang Yesus Kristus kepada semua orang, membangun komunitas yang penuh kasih, dan melayani masyarakat dengan hati yang tulus untuk kemuliaan Tuhan."
                            </p>
                            
                            <div class="space-y-4">
                                <div class="flex items-start space-x-4 p-4 bg-white/60 rounded-lg vm-item">
                                    <div class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-cross text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-gray-900 mb-2">Pemberitaan Injil</h5>
                                        <p class="text-gray-700">Menyampaikan kabar baik tentang keselamatan melalui Yesus Kristus kepada semua orang tanpa memandang latar belakang.</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4 p-4 bg-white/60 rounded-lg vm-item">
                                    <div class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-users text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-gray-900 mb-2">Pembangunan Komunitas</h5>
                                        <p class="text-gray-700">Menciptakan lingkungan yang hangat, inklusif, dan mendukung pertumbuhan rohani setiap anggota jemaat.</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4 p-4 bg-white/60 rounded-lg vm-item">
                                    <div class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-hands-helping text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-gray-900 mb-2">Pelayanan Masyarakat</h5>
                                        <p class="text-gray-700">Melayani masyarakat dengan program-program sosial yang berkelanjutan dan berdampak positif.</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4 p-4 bg-white/60 rounded-lg vm-item">
                                    <div class="w-10 h-10 bg-red-400 rounded-full flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-graduation-cap text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-gray-900 mb-2">Pendidikan Iman</h5>
                                        <p class="text-gray-700">Menyediakan pendidikan dan pembinaan iman yang komprehensif untuk semua kelompok usia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-4">
                    Pelayanan <span class="text-blue-600">Kami</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Berbagai pelayanan yang kami sediakan untuk memenuhi kebutuhan spiritual dan sosial jemaat dan masyarakat.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 bg-gradient-to-br from-[#1e3a8a] to-[#7f1d1d] flex items-center justify-center">
                        <i class="fas fa-church text-6xl text-white group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3">Ibadah Minggu</h3>
                        <p class="text-gray-600 mb-4">Ibadah mingguan yang penuh sukacita dengan musik yang mengangkat dan khotbah yang relevan.</p>
                        <div class="flex items-center text-blue-600 font-medium">
                            <span>Setiap Minggu</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Service Card 2 -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 bg-gradient-to-br from-[#1e3a8a] to-[#7f1d1d] flex items-center justify-center">
                        <i class="fas fa-users text-6xl text-white group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3">Komsel & Fellowship</h3>
                        <p class="text-gray-600 mb-4">Komunitas kecil untuk pertumbuhan rohani dan persekutuan yang lebih intim.</p>
                        <div class="flex items-center text-blue-600 font-medium">
                            <span>Setiap Minggu</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Service Card 3 -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-48 bg-gradient-to-br from-[#1e3a8a] to-[#7f1d1d] flex items-center justify-center">
                        <i class="fas fa-music text-6xl text-white group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3">Praise & Worship</h3>
                        <p class="text-gray-600 mb-4">Tim musik yang membawa atmosfer penyembahan yang penuh kuasa dan anugerah.</p>
                        <div class="flex items-center text-blue-600 font-medium">
                            <span>Setiap Ibadah</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Service Card 4 -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                    <div class="h-48 bg-gradient-to-br from-[#1e3a8a] to-[#7f1d1d] flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-6xl text-white group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3">Sekolah Minggu</h3>
                        <p class="text-gray-600 mb-4">Pendidikan iman untuk anak-anak dengan metode yang menyenangkan dan edukatif.</p>
                        <div class="flex items-center text-blue-600 font-medium">
                            <span>Setiap Minggu</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Service Card 5 -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                    <div class="h-48 bg-gradient-to-br from-[#7f1d1d] to-[#1e3a8a] flex items-center justify-center">
                        <i class="fas fa-hands-helping text-6xl text-white group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3">Pelayanan Sosial</h3>
                        <p class="text-gray-600 mb-4">Program bantuan untuk masyarakat yang membutuhkan dan pengembangan komunitas.</p>
                        <div class="flex items-center text-blue-600 font-medium">
                            <span>Berkelanjutan</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Service Card 6 -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="600">
                    <div class="h-48 bg-gradient-to-br from-[#1e3a8a] to-[#7f1d1d] flex items-center justify-center">
                        <i class="fas fa-pray text-6xl text-white group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3">Doa & Konseling</h3>
                        <p class="text-gray-600 mb-4">Pelayanan doa dan konseling pastoral untuk mendukung pertumbuhan rohani.</p>
                        <div class="flex items-center text-blue-600 font-medium">
                            <span>Setiap Waktu</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-4">
                    Acara <span class="text-blue-600">Terbaru</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Acara-acara menarik yang akan datang dan kegiatan rutin yang bisa Anda ikuti.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Featured Event -->
                <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up">
                    <div class="lg:flex">
                        <div class="lg:w-1/2">
                            <div class="h-64 lg:h-full bg-gradient-to-br from-[#1e3a8a] to-[#7f1d1d] flex items-center justify-center">
                                <i class="fas fa-calendar-alt text-8xl text-white/80"></i>
                            </div>
                        </div>
                        <div class="lg:w-1/2 p-8">
                            <div class="flex items-center space-x-2 mb-4">
                                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Acara Utama</span>
                                <span class="text-gray-500 text-sm">Minggu, 15 Desember 2024</span>
                            </div>
                            <h3 class="font-poppins font-bold text-2xl text-gray-900 mb-4">Natal Bersama GPDI 2024</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Rayakan Natal dengan sukacita bersama keluarga GPDI. Acara akan diisi dengan pujian, drama, dan berkat Natal untuk semua.
                            </p>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center space-x-2 text-gray-600">
                                    <i class="fas fa-clock"></i>
                                    <span>18:00 WIB</span>
                                </div>
                                <div class="flex items-center space-x-2 text-gray-600">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Gedung GPDI Jakarta</span>
                                </div>
                            </div>
                            <a href="#contact" class="inline-block mt-6 bg-gradient-to-r from-[#1e3a8a] to-[#7f1d1d] text-white px-6 py-3 rounded-full font-medium hover:shadow-lg hover:scale-105 transition-all">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Regular Events -->
                <div class="bg-white rounded-2xl shadow-lg p-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-users text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Komsel Mingguan</h4>
                            <p class="text-sm text-gray-500">Setiap Selasa & Kamis</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Persekutuan dalam kelompok kecil untuk pertumbuhan rohani yang lebih mendalam.</p>
                    <a href="#contact" class="text-blue-600 hover:text-blue-700 font-medium">Bergabung →</a>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-music text-red-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Latihan Musik</h4>
                            <p class="text-sm text-gray-500">Setiap Jumat</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Latihan tim musik untuk mempersiapkan ibadah mingguan yang penuh kuasa.</p>
                    <a href="#contact" class="text-blue-600 hover:text-blue-700 font-medium">Bergabung →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-4">
                    Hubungi <span class="text-blue-600">Kami</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Kami siap melayani dan menjawab pertanyaan Anda. Jangan ragu untuk menghubungi kami.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div data-aos="fade-right">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">Nama Depan</label>
                                <input type="text" id="first_name" name="first_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" placeholder="Masukkan nama depan">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Nama Belakang</label>
                                <input type="text" id="last_name" name="last_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" placeholder="Masukkan nama belakang">
                            </div>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" placeholder="Masukkan email">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" placeholder="Masukkan nomor telepon">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-400 to-red-400 text-white py-4 rounded-lg font-semibold text-lg hover:shadow-lg hover:scale-105 transition-all">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div data-aos="fade-left">
                    <div class="bg-gradient-to-br from-blue-50 to-red-50 rounded-2xl p-8 h-full contact-card">
                        <h3 class="font-poppins font-bold text-2xl text-gray-900 mb-6">Informasi Kontak</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4 contact-item">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Alamat</h4>
                                    <p class="text-gray-600">Jl. Sudirman No. 123<br>Jakarta Pusat, 12345<br>Indonesia</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4 contact-item">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Telepon</h4>
                                    <p class="text-gray-600">+62 21 1234 5678<br>+62 21 1234 5679</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4 contact-item">
                                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope text-red-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                                    <p class="text-gray-600">info@gpdi.org<br>pastor@gpdi.org</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4 contact-item">
                                <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-clock text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Jam Operasional</h4>
                                    <p class="text-gray-600">Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 12:00<br>Minggu: 07:00 - 12:00</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Media -->
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <h4 class="font-semibold text-gray-900 mb-4 social-heading">Ikuti Kami</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="w-12 h-12 bg-blue-400 rounded-full flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                                    <i class="fab fa-facebook-f text-xl"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-pink-600 rounded-full flex items-center justify-center text-white hover:bg-pink-700 transition-colors">
                                    <i class="fab fa-instagram text-xl"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-red-400 rounded-full flex items-center justify-center text-white hover:bg-red-500 transition-colors">
                                    <i class="fab fa-youtube text-xl"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-blue-400 rounded-full flex items-center justify-center text-white hover:bg-blue-500 transition-colors">
                                    <i class="fab fa-twitter text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="font-poppins font-bold text-3xl lg:text-4xl text-gray-900 mb-4">
                    Lokasi <span class="text-blue-600">Kami</span>
                </h2>
                <p class="text-xl text-gray-600">Temukan lokasi GPDI dengan mudah</p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <div class="h-96 bg-gradient-to-br from-blue-100 to-red-100 flex items-center justify-center">
                    <div class="text-center">
                        <i class="fas fa-map-marked-alt text-6xl text-blue-600 mb-4"></i>
                        <p class="text-gray-600 text-lg">Peta Lokasi GPDI</p>
                        <p class="text-gray-500">Jl. Sudirman No. 123, Jakarta Pusat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
