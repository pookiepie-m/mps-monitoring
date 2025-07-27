<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\CalendarController;



// Halaman utama diarahkan ke login

Route::get('/', [AuthController::class, 'showLogin'])->name('login');

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Reset password - kirim email
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Reset password - form setelah klik dari email
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// rute untuk register pendaftaran akun
// Tampilkan form register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

// Proses form register
Route::post('/register', [AuthController::class, 'register']);

Route::get('/hmi', function () {
    return view('hmi');
})->name('hmi');

Route::get('/mqttstatus', function () {
    return view('mqttstatus');
})->name('mqttstatus');

Route::get('/doc', function () {
    return view('doc');
})->name('doc');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/calendar', [CalendarController::class, 'index']);
Route::get('/calendar/events', [CalendarController::class, 'fetchEvents']);
Route::post('/calendar/store', [CalendarController::class, 'store']);
Route::post('/calendar/update', [CalendarController::class, 'update']);
Route::post('/calendar/delete', [CalendarController::class, 'destroy']);


