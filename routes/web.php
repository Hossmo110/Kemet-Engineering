<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;


Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/businesses', 'businesses')->name('businesses');

Route::view('/innovation', 'innovation')->name('innovation');

Route::view('/csr', 'csr')->name('csr');

Route::view('/contact', 'contact')->name('contact');



    Route::get('/careers', [CareerController::class, 'index'])
    ->name('careers.index');

Route::get('/careers/{id}', [CareerController::class, 'show'])
    ->name('careers.show');
