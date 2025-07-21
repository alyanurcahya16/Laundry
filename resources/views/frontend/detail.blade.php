<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Layanan - Royal Laundress</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
    }

    .animate-fadeInUp {
      animation: fadeInUp 0.8s ease-out;
    }

    .animate-float {
      animation: float 3s ease-in-out infinite;
    }

    .card-hover {
      transition: all 0.3s ease;
    }

    .card-hover:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .gradient-bg {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .price-highlight {
      background: linear-gradient(135deg, #ff6b6b, #feca57);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .service-icon {
      background: linear-gradient(135deg, #667eea, #764ba2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .glass-effect {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
  </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-blue-50 text-gray-800 min-h-screen">

  <!-- Header -->
  <header class="gradient-bg text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="relative z-10 p-8 text-center">
      <div class="animate-float mb-4">
        <i class="fas fa-crown text-6xl text-yellow-300"></i>
      </div>
      <h1 class="text-5xl font-bold mb-4 animate-fadeInUp">Detail Layanan</h1>
      <p class="text-xl opacity-90 animate-fadeInUp">Royal Laundress - Menyelesaikan Masalah Tanpa Lelah</p>
      <div class="mt-6 animate-fadeInUp">
        <span class="inline-block px-4 py-2 bg-white bg-opacity-20 rounded-full text-sm font-medium glass-effect">
          <i class="fas fa-star text-yellow-300 mr-2"></i>
          Layanan Premium Terpercaya
        </span>
      </div>
    </div>
  </header>

  <!-- Daftar Harga -->
  <section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold mb-4">
          <span class="service-icon">Daftar Harga</span>
        </h2>
        <p class="text-gray-600 text-lg">Pilih layanan sesuai kebutuhan Anda</p>
        <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mt-4 rounded-full"></div>
      </div>

      <!-- Baris Pertama -->
      <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 mb-12">
        <!-- DAILY KILOAN -->
        <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border-l-4 border-blue-500">
          <div class="flex items-center mb-6">
            <div class="bg-blue-100 p-3 rounded-full mr-4">
              <i class="fas fa-tshirt text-blue-600 text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">Daily Kiloan</h3>
          </div>
          <ul class="space-y-4">
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Cuci Kering Lipat</span>
              <span class="font-bold text-xl price-highlight">7K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Cuci Kering Gosok 3 Hari</span>
              <span class="font-bold text-xl price-highlight">9K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Cuci Kering Gosok 1 Hari</span>
              <span class="font-bold text-xl price-highlight">12K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Cuci Kering Gosok 12 Jam</span>
              <span class="font-bold text-xl price-highlight">18K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Cuci Kering Gosok 6 Jam</span>
              <span class="font-bold text-xl price-highlight">22K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Setrika Kiloan Reguler 2 Hari</span>
              <span class="font-bold text-xl price-highlight">7K</span>
            </li>
            <li class="flex justify-between items-center py-2">
              <span class="text-gray-700">Setrika Kiloan Express 1 Hari</span>
              <span class="font-bold text-xl price-highlight">9K</span>
            </li>
          </ul>
        </div>

        <!-- SATUAN -->
        <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border-l-4 border-purple-500">
          <div class="flex items-center mb-6">
            <div class="bg-purple-100 p-3 rounded-full mr-4">
              <i class="fas fa-user-tie text-purple-600 text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">Satuan</h3>
          </div>
          <ul class="space-y-4">
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Atasan (Kemeja/Blouse/Batik)</span>
              <span class="font-bold text-xl price-highlight">25K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Bawahan (Rok/Jeans/Celana)</span>
              <span class="font-bold text-xl price-highlight">18K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Luaran (Jaket/Hoodie)</span>
              <span class="font-bold text-xl price-highlight">30K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Jas (Blazer/Mantel)</span>
              <span class="font-bold text-xl price-highlight">50K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Jas Setelan</span>
              <span class="font-bold text-xl price-highlight">70K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Dress (Muslim/Long)</span>
              <span class="font-bold text-xl price-highlight">25K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Gaun Panjang</span>
              <span class="font-bold text-xl price-highlight">30K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Kebaya</span>
              <span class="font-bold text-xl price-highlight">30K</span>
            </li>
            <li class="flex justify-between items-center py-2">
              <span class="text-gray-700">Alat Ibadah</span>
              <span class="font-bold text-xl price-highlight">25K</span>
            </li>
          </ul>
        </div>

        <!-- BEDDINGS -->
        <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border-l-4 border-green-500">
          <div class="flex items-center mb-6">
            <div class="bg-green-100 p-3 rounded-full mr-4">
              <i class="fas fa-bed text-green-600 text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">Beddings</h3>
          </div>
          <ul class="space-y-4">
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Pillow/Bantal/Guling</span>
              <span class="font-bold text-xl price-highlight">20K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Pillowcase</span>
              <span class="font-bold text-xl price-highlight">10K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Sprei Single</span>
              <span class="font-bold text-xl price-highlight">15K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Sprei Double</span>
              <span class="font-bold text-xl price-highlight">25K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Selimut Single</span>
              <span class="font-bold text-xl price-highlight">20K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Selimut Double</span>
              <span class="font-bold text-xl price-highlight">25K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Bed Cover Single</span>
              <span class="font-bold text-xl price-highlight">25K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Bed Cover Double</span>
              <span class="font-bold text-xl price-highlight">32K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Paket Bedding Single</span>
              <span class="font-bold text-xl price-highlight">35K</span>
            </li>
            <li class="flex justify-between items-center py-2">
              <span class="text-gray-700">Paket Bedding Double</span>
              <span class="font-bold text-xl price-highlight">50K</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Baris Kedua -->
      <div class="grid lg:grid-cols-2 gap-8">
        <!-- Other Items -->
        <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border-l-4 border-orange-500">
          <div class="flex items-center mb-6">
            <div class="bg-orange-100 p-3 rounded-full mr-4">
              <i class="fas fa-shopping-bag text-orange-600 text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">Other Items</h3>
          </div>
          <ul class="space-y-4">
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Handuk</span>
              <span class="font-bold text-xl price-highlight">15K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Dompet (Non-Leather) Kecil</span>
              <span class="font-bold text-xl price-highlight">25K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Dompet (Non-Leather) Besar</span>
              <span class="font-bold text-xl price-highlight">30K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Dompet Leather Kecil</span>
              <span class="font-bold text-xl price-highlight">40K</span>
            </li>
            <li class="flex justify-between items-center py-2">
              <span class="text-gray-700">Dompet Leather Besar</span>
              <span class="font-bold text-xl price-highlight">45K</span>
            </li>
          </ul>
        </div>

        <!-- Tas & Sepatu -->
        <div class="bg-white p-8 rounded-2xl shadow-lg card-hover border-l-4 border-pink-500">
          <div class="flex items-center mb-6">
            <div class="bg-pink-100 p-3 rounded-full mr-4">
              <i class="fas fa-shoe-prints text-pink-600 text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800">Tas & Sepatu</h3>
          </div>
          <ul class="space-y-4">
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Sepatu (Nylon, Canvas, Rubber)</span>
              <span class="font-bold text-xl price-highlight">45K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Sepatu Putih</span>
              <span class="font-bold text-xl price-highlight">55K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Sepatu Wanita</span>
              <span class="font-bold text-xl price-highlight">45K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Sepatu Suede & Leather</span>
              <span class="font-bold text-xl price-highlight">100K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Sandal</span>
              <span class="font-bold text-xl price-highlight">25K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Unyellowing</span>
              <span class="font-bold text-xl price-highlight">120K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Tas (Non-Leather) Kecil</span>
              <span class="font-bold text-xl price-highlight">30K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Tas (Non-Leather) Sedang</span>
              <span class="font-bold text-xl price-highlight">40K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Tas (Non-Leather) Besar</span>
              <span class="font-bold text-xl price-highlight">50K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Tas Leather Kecil</span>
              <span class="font-bold text-xl price-highlight">75K</span>
            </li>
            <li class="flex justify-between items-center py-2 border-b border-gray-100">
              <span class="text-gray-700">Tas Leather Sedang</span>
              <span class="font-bold text-xl price-highlight">100K</span>
            </li>
            <li class="flex justify-between items-center py-2">
              <span class="text-gray-700">Tas Leather Besar</span>
              <span class="font-bold text-xl price-highlight">150K</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="text-center mt-16">
        <div class="bg-white p-8 rounded-2xl shadow-lg max-w-2xl mx-auto">
          <h3 class="text-2xl font-bold mb-4">Siap Menggunakan Layanan Kami?</h3>
          <p class="text-gray-600 mb-6">Hubungi kami sekarang untuk mendapatkan layanan laundry terbaik!</p>
          <button class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-3 rounded-full font-semibold hover:from-blue-600 hover:to-purple-700 transition duration-300 shadow-lg">
            <i class="fas fa-phone mr-2"></i>
            Hubungi Sekarang
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="gradient-bg text-white text-center py-8 mt-10">
    <div class="max-w-4xl mx-auto px-6">
      <div class="flex justify-center mb-4">
        <i class="fas fa-crown text-3xl text-yellow-300"></i>
      </div>
      <p class="text-lg font-medium">&copy; 2025 Royal Laundress. All rights reserved.</p>
      <p class="text-sm opacity-75 mt-2">Menyelesaikan Masalah Tanpa Lelah</p>
    </div>
  </footer>

</body>
</html>
