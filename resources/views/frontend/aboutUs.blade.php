@extends('layouts.app')
@section('title', 'Tentang Kami - Royal Laundress')
@section('content')
<style>
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slide-up {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fade-in 1s ease-out;
        }

        .animate-slide-up {
            animation: slide-up 1s ease-out 0.3s both;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 to-purple-50" id="top">

    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative container mx-auto px-4 py-20">
            <div class="text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-in">Royal Laundress</h1>
                <p class="text-xl md:text-2xl mb-8 animate-slide-up">"Menyelesaikan Masalah Tanpa Lelah"</p>
                <div class="w-24 h-1 bg-white mx-auto rounded-full"></div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,64L48,69.3C96,75,192,85,288,80C384,75,480,53,576,48C672,43,768,53,864,69.3C960,85,1056,107,1152,112C1248,117,1344,107,1392,101.3L1440,96L1440,120L0,120Z" fill="rgb(239, 246, 255)" />
            </svg>
        </div>
    </div>

    <!-- Cerita Tentang Kami -->
    <div class="text-center mt-12 mb-8">
        <h2 class="text-5xl font-bold text-gray-800">Cerita Tentang Kami</h2>
        <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- Gambar -->
    <div class="container mx-auto px-4 mb-20">
        <div class="grid md:grid-cols-3 gap-6">
            <img src="https://i.pinimg.com/736x/22/cf/3f/22cf3f365249988cb4b1bab2516d6b89.jpg" alt="gambar 1" class="rounded-xl shadow-lg">
            <img src="https://i.pinimg.com/736x/22/cf/3f/22cf3f365249988cb4b1bab2516d6b89.jpg" class="rounded-xl shadow-lg">
            <img src="https://i.pinimg.com/736x/22/cf/3f/22cf3f365249988cb4b1bab2516d6b89.jpg" class="rounded-xl shadow-lg">
        </div>
    </div>

    <!-- Kutipan Pendiri -->
    <div class="text-center mb-12 px-6">
        <blockquote class="text-xl text-blue-500 font-semibold italic max-w-3xl mx-auto">
            "Pelayanan terbaik datang dari pekerja terbaik, pekerja terbaik datang dari budaya perusahaan yang baik"
            <br>
            <span class="text-sm text-gray-600 font-normal">- Herlina Pujiastuti, Founder & Executive Director</span>
        </blockquote>
    </div>

    <!-- Visi & Misi -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Visi & Misi</h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Visi -->
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4 text-center">Visi</h3>
                        <p class="text-center text-lg leading-relaxed">
                            Menjadi UMKM yang handal dan ditunjang dengan teknologi untuk memberikan layanan laundry dan dry cleaning terbaik
                        </p>
                    </div>

                    <!-- Misi -->
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4 text-center">Misi</h3>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 mr-2 mt-1 flex-shrink-0 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Menciptakan pencucian rapih, bersih dan wangi
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 mr-2 mt-1 flex-shrink-0 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Meningkatkan kesejahteraan karyawan
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 mr-2 mt-1 flex-shrink-0 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Menjalankan bisnis yang profesional
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 mr-2 mt-1 flex-shrink-0 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Membuka cabang di berbagai tempat
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

