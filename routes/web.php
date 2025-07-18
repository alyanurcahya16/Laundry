<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PesananController;


// 🏠 Halaman utama
Route::get('/', fn () => view('frontend.home'));
Route::get('/aboutus', function () {return view('frontend.aboutUs');})->name('about.us');
Route::get('/details', function () {return view('frontend.detail');})->name('detail');
Route::get('/kontak', function () {return view('frontend.contact');});

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



Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
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

