<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Custom Login| Register routes
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/signup', [LoginController::class, 'signup'])->name('signup');

// Admin routes
Route::middleware(['role:admin', 'auth'])->group(function () {
    Route::view('admin/dashboard-admin', 'admin/dash-admin');
    Route::get('admin/Employerapproval', [AdminController::class, 'empList'])->name('emplist');
    Route::post('empapprove', [AdminController::class, 'empapprove'])->name('empapprove');
});

// Employer routes
Route::middleware(['role:employer', 'auth'])->group(function () {
    Route::view('employer/dash-employer', 'employer/dash-employer');
});

// Employee routes
Route::middleware(['role:employee', 'auth'])->group(function () {
    Route::view('employee/jobcard', 'employee/jobcard');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
