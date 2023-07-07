<?php

use App\Http\Controllers\Admin\Testimonials\TestimonialsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Custom Login| Register routes
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/signup', [LoginController::class, 'signup'])->name('signup');

// Admin routes
Route::middleware(['role:admin', 'auth'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'index']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::resource('testimonials',TestimonialsController::class);
});


