<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;

// ====== Halaman Website Utama ======
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/detail/{id}', [LandingController::class, 'detail'])->name('landing.detail');
Route::get('/property', [LandingController::class, 'property'])->name('landing.property');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');

// Booking routes
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

// ====== Halaman Admin ======
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/about', [AboutController::class, 'index'])->name('admin.about');