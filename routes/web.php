<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('about', [PageController::class, 'about'])->name('aboutpage');
Route::get('/', [PageController::class, 'home'])->name('homepage');
Route::get('contact', [PageController::class, 'contact'])->name('contactpage');
Route::get('admission', [PageController::class, 'admissionpage'])->name('admissionpage');
Route::post('admissionform', [AdmissionController::class, 'admissionform'])->name('admissionform');
Route::post('contactform', [PageController::class, 'contactform'])->name('contactform');
