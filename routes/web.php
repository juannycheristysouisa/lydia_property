<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/detail', [LandingController::class, 'detail'])->name('detail');
Route::get('/property', [LandingController::class, 'property'])->name('property');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');