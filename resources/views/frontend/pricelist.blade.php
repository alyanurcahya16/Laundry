@extends('layouts.app')
@section('title', 'Daftar Harga - Royal Laundress')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <section class="py-20 px-6 bg-blue-50">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Daftar Harga</h2>
                <p class="text-gray-600 text-lg">Layanan laundry profesional untuk kebutuhan Anda</p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-16">
                <a href="tel:+6281292204477"
                    class="inline-block bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-3 rounded-full font-semibold hover:scale-105 transition duration-300 shadow-md">
                    <i class="fas fa-phone mr-2"></i> Hubungi Kami
                </a>
                <a href="pesanan"
                    class="mt-4 inline-block bg-gradient-to-r from-purple-500 to-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:scale-105 transition duration-300 shadow-md">
                    <i class="fas fa-shopping-cart mr-2"></i> Buat Pesanan
                </a>
            </div>

            <!-- Grid Harga -->
            <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-8 mt-16">

                <!-- Kiloan Harian -->
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <img src="https://i.pinimg.com/1200x/46/f9/8c/46f98caa1a5f940bf66f4d246bf208b1.jpg"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-4 text-blue-600">Kiloan Harian</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex justify-between"><span>Cuci Kering Lipat</span><span>7K</span></li>
                        <li class="flex justify-between"><span>Cuci Kering Gosok 3 Hari</span><span>9K</span></li>
                        <li class="flex justify-between"><span>Cuci Kering Gosok 1 Hari</span><span>12K</span></li>
                        <li class="flex justify-between"><span>Cuci Kering Gosok 12 Jam</span><span>18K</span></li>
                        <li class="flex justify-between"><span>Cuci Kering Gosok 6 Jam</span><span>22K</span></li>
                        <li class="flex justify-between"><span>Setrika Kiloan Reguler</span><span>7K</span></li>
                        <li class="flex justify-between"><span>Setrika Kiloan Express</span><span>9K</span></li>
                    </ul>
                </div>

                <!-- Satuan -->
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <img src="https://i.pinimg.com/736x/7e/9a/b8/7e9ab8b42c20dc188d175760dd46e191.jpg"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-4 text-purple-600">Satuan</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex justify-between"><span>Atasan (Kemeja/Batik)</span><span>25K</span></li>
                        <li class="flex justify-between"><span>Bawahan (Jeans)</span><span>18K</span></li>
                        <li class="flex justify-between"><span>Luaran (Jaket)</span><span>30K</span></li>
                        <li class="flex justify-between"><span>Jas Setelan</span><span>70K</span></li>
                        <li class="flex justify-between"><span>Dress</span><span>25K</span></li>
                        <li class="flex justify-between"><span>Gaun Panjang</span><span>30K</span></li>
                        <li class="flex justify-between"><span>Kebaya</span><span>30K</span></li>
                    </ul>
                </div>

                <!-- Beddings -->
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <img src="https://voguedrycleaners.co.ke/wp-content/uploads/2013/06/images-1.jpg"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-4 text-green-600">Beddings</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex justify-between"><span>Bantal</span><span>20K</span></li>
                        <li class="flex justify-between"><span>Sprei Single</span><span>15K</span></li>
                        <li class="flex justify-between"><span>Selimut Double</span><span>25K</span></li>
                        <li class="flex justify-between"><span>Bed Cover Single</span><span>25K</span></li>
                        <li class="flex justify-between"><span>Paket Bedding Double</span><span>50K</span></li>
                    </ul>
                </div>

                <!-- Lainnya -->
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <img src="https://i.pinimg.com/736x/96/92/d4/9692d4246ffdb962e86c92bb43856248.jpg"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-4 text-orange-500">Lainnya</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex justify-between"><span>Handuk</span><span>15K</span></li>
                        <li class="flex justify-between"><span>Dompet Kecil</span><span>25K</span></li>
                        <li class="flex justify-between"><span>Dompet Besar</span><span>30K</span></li>
                    </ul>
                </div>

                <!-- Tas & Sepatu -->
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <img src="https://i.pinimg.com/736x/ae/d0/dd/aed0dd27da5ca0395ba389c626562f8f.jpg"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-4 text-pink-500">Tas & Sepatu</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex justify-between"><span>Sepatu (Nylon)</span><span>45K</span></li>
                        <li class="flex justify-between"><span>Sepatu Putih</span><span>55K</span></li>
                        <li class="flex justify-between"><span>Sepatu Kulit</span><span>100K</span></li>
                        <li class="flex justify-between"><span>Tas Non-Kulit</span><span>40K</span></li>
                        <li class="flex justify-between"><span>Tas Kulit Besar</span><span>150K</span></li>
                    </ul>
                </div>

                <!-- Linen -->
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <img src="https://i.pinimg.com/1200x/d5/b4/3f/d5b43f15ab049fa6d74899ca0c72d94a.jpg"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-4 text-blue-800">Linen</h3>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li class="flex justify-between"><span>Seprai Double</span><span>2.500</span></li>
                        <li class="flex justify-between"><span>Seprai Single</span><span>2.400</span></li>
                        <li class="flex justify-between"><span>Cover Duvet Double</span><span>5.000</span></li>
                        <li class="flex justify-between"><span>Cover Duvet Single</span><span>4.700</span></li>
                        <li class="flex justify-between"><span>Sarung Bantal</span><span>1.200</span></li>
                        <li class="flex justify-between"><span>Handuk Mandi</span><span>2.500</span></li>
                        <li class="flex justify-between"><span>Handuk Tangan</span><span>1.500</span></li>
                        <li class="flex justify-between"><span>Handuk Wajah</span><span>1.100</span></li>
                        <li class="flex justify-between"><span>Handuk Kolam</span><span>3.000</span></li>
                        <li class="flex justify-between"><span>Selimut Double</span><span>7.000</span></li>
                    </ul>
                </div>

                <!-- Seragam -->
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <img src="https://i.pinimg.com/1200x/4d/ce/ff/4dceff599d524bccabb330a9e30de282.jpg"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-4 text-indigo-800">Seragam</h3>
                    <ul class="space-y-2 text-gray-700 text-sm">
                        <li class="flex justify-between"><span>Kemeja</span><span>7.000</span></li>
                        <li class="flex justify-between"><span>Celana</span><span>7.000</span></li>
                        <li class="flex justify-between"><span>Jas / Jaket</span><span>9.000</span></li>
                        <li class="flex justify-between"><span>Rok Pendek</span><span>5.100</span></li>
                        <li class="flex justify-between"><span>Rok Panjang</span><span>5.600</span></li>
                        <li class="flex justify-between"><span>Jaket Koki</span><span>7.300</span></li>
                        <li class="flex justify-between"><span>Apron Dapur</span><span>3.000</span></li>
                        <li class="flex justify-between"><span>Kaos</span><span>7.000</span></li>
                        <li class="flex justify-between"><span>Dasi</span><span>4.500</span></li>
                        <li class="flex justify-between"><span>Kemeja Safari</span><span>13.000</span></li>
                    </ul>
                </div>
            </div>

            <p class="text-xs text-gray-500 mt-2">*Catatan: harga treatment/spotting adalah 2x dari harga di atas</p>
        </div>
    </section>
@endsection
