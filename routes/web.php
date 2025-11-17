<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPropertyController;

// ====== Halaman Website Utama ======
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/detail/{id}', [LandingController::class, 'detail'])->name('landing.detail');
Route::get('/property', [LandingController::class, 'property'])->name('landing.property');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');

// Booking routes
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

// ====== Halaman Admin ======
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'loginProcess'])->name('admin.loginProcess');
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'registerProcess'])->name('admin.registerProcess');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth:admin')->name('admin.dashboard');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
// Resource untuk properti admin
Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('properties', AdminPropertyController::class);
});