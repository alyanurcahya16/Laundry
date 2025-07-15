<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/form-pemesanan', [OrderController::class, 'create'])->name('order.create');
Route::post('/form-pemesanan', [OrderController::class, 'store'])->name('order.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');
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
