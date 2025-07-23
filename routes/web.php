<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PesananController;
use App\Models\Testimoni;
use App\Http\Controllers\Frontend\TestimoniController as FrontendTestimoniController;
use App\Http\Controllers\Frontend\TestimoniController;
use App\Http\Controllers\Frontend\HotelFormController;
use App\Http\Controllers\Backend\HotelRegistrasiController;


// 🏠 Halaman utama
Route::get('/', fn () => view('frontend.home'));
Route::get('/aboutus', function () {return view('frontend.aboutUs');})->name('about.us');

// 🧾 Order (pakai model Order)
Route::get('/form-pemesanan', [OrderController::class, 'create'])->name('order.create');
Route::post('/form-pemesanan', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/success/{id}', [OrderController::class, 'success'])->name('order.success');
Route::get('/order/receipt/{id}', [OrderController::class, 'receipt'])->name('order.receipt');

// 📝 Pesanan (pakai model Pesanan)
Route::get('/pesanan', [PesananController::class, 'create'])->name('pesanan.create');
Route::post('/pesanan', [PesananController::class, 'store'])->name('pesanan.store');
Route::get('/pesanan/success', fn () => view('frontend.success'))->name('pesanan.success');

// 🛠️ Admin + Auth Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Hotel registrasi
Route::get('/form-registrasi-hotel', [HotelFormController::class, 'create'])->name('hotel.form');
Route::post('/form-registrasi-hotel', [HotelFormController::class, 'store'])->name('hotel.form.submit');
Route::get('/registrasi-hotel/terima-kasih', function () {return view('frontend.hotel.thankyou');})->name('hotel.thankyou');

// Testimoni
Route::get('/testimoni', function () {$testimoni = Testimoni::all();return view('frontend.testimoni.index', compact('testimoni'));})->name('frontend.testimoni');
Route::get('/testimoni', [FrontendTestimoniController::class, 'index'])->name('frontend.testimoni.index');
Route::post('/testimoni', [FrontendTestimoniController::class, 'store'])->name('frontend.testimoni.store');

Route::prefix('testimoni')->name('frontend.testimoni.')->group(function () {
    Route::get('/', [TestimoniController::class, 'index'])->name('index');
    Route::post('/', [TestimoniController::class, 'store'])->name('store');
    Route::get('/thanks', [TestimoniController::class, 'thanks'])->name('thanks');
});

// Order routes
Route::prefix('admin/orders')->group(function() {
    Route::delete('/admin/orders/{order}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');
    Route::get('/', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/history', [OrderController::class, 'history'])->name('admin.orders.history');
    Route::post('/{order}/move-to-history', [OrderController::class, 'moveToHistory'])->name('admin.orders.moveToHistory');
    Route::put('/{order}/status', [OrderController::class, 'updateStatus'])->name('admin.orders.updateStatus');
});
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/registrasi-hotel', [HotelRegistrasiController::class, 'index'])->name('admin.registrasi.index');
    Route::delete('/admin/registrasi-hotel/{id}', [HotelRegistrasiController::class, 'destroy'])->name('admin.registrasi.destroy');
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/order', [OrderController::class, 'index'])->name('admin.order.index');
    Route::get('/orders', [\App\Http\Controllers\Admin\OrderAdminController::class, 'index'])->name('admin.orders.index');
    Route::get('/pesanan', [PesananController::class, 'index'])->name('admin.pesanan.index');
    Route::put('/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('admin.orders.updateStatus');

    Route::resource('settings', SettingController::class);
    Route::resource('banners', \App\Http\Controllers\BannerController::class);
    Route::resource('about', \App\Http\Controllers\AboutUsController::class);
    Route::resource('appointments', \App\Http\Controllers\AppointmentController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('workingprocess', \App\Http\Controllers\WorkingProcessController::class);
    Route::resource('porto', \App\Http\Controllers\PortoController::class);
    Route::resource('testimoni', \App\Http\Controllers\TestimoniController::class);
    Route::resource('sponsor', \App\Http\Controllers\SponsorController::class);
});

require __DIR__.'/auth.php';

