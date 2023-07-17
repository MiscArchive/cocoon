<?php

use App\Http\Controllers\FrontEnd\Curriculum\CurriculumController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('frontEnd.pages.index');
});


Route::prefix('curriculum')->group(function () {
    Route::get('/{slug}', [CurriculumController::class, 'index']);
});


