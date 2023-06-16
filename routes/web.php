<?php

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
    Route::view('admin/dashboard-admin', 'admin/dash-admin');
    Route::get('admin/Employerapproval', [AdminController::class, 'empList'])->name('emplist');
    Route::post('empapprove', [AdminController::class, 'empapprove'])->name('empapprove');
    Route::get('admin/employerdetails', [AdminController::class, 'empdetails'])->name('empdetails');
    Route::get('admin/employeedetails', [AdminController::class, 'employeedetails'])->name('employeedetails');
    Route::get('admin/postapproval', [AdminController::class, 'postapproval'])->name('postapproval');
    Route::post('jobapprove', [AdminController::class, 'jobapprove'])->name('jobapprove');
});

// Employer routes
Route::middleware(['role:employer', 'auth'])->group(function () {
    Route::view('employer/dash-employer', 'employer/dash-employer');
    Route::get('employer/postjob', [EmployerController::class, 'postjob'])->name('postjob');
    Route::post('jobpost', [EmployerController::class, 'jobpost'])->name('jobpost');
    Route::get('employer/employeeapplied', [EmployerController::class, 'empapplied'])->name('empapplied');
});

// Employee routes
Route::middleware(['role:employee', 'auth'])->group(function () {
    Route::get('employee/jobcard', [EmployeeController::class, 'jobcard'])->name('jobcard');
    Route::get('employee/applyjob/{job}', [EmployeeController::class, 'applyjob'])->name('applyjob');
    Route::post('applyform', [EmployeeController::class, 'applyform'])->name('applyform');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
