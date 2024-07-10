<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobileLegendsController;
use Illuminate\Support\Facades\Route;

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

// Rute untuk home page
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/mobilelegends', [HomeController::class, 'ml'])->name('home.ml');

// Rute untuk register
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Rute untuk login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk halaman home yang dilindungi
Route::get('/home', [HomeController::class, 'home'])->middleware('auth');

// Rute untuk mengakses controller api mobile legends
Route::post('/ml-get-player-info', [MobileLegendsController::class, 'getPlayerInfo'])->name('getPlayerInfo');

//