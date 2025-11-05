<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/detail/{id}', [LandingController::class, 'detail'])->name('landing.detail');
Route::get('/property', [LandingController::class, 'property'])->name('landing.property');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');

// Booking routes
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

// Halaman admin login
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'loginProcess'])->name('admin.login.process');

// Dashboard admin (dilindungi auth guard 'admin')
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware('auth:admin');

// 🔽 Tambahkan ini di bawah dashboard
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Logout admin
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');