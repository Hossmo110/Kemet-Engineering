<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/businesses', 'businesses')->name('businesses');

Route::view('/innovation', 'innovation')->name('innovation');

Route::view('/csr', 'csr')->name('csr');

Route::view('/contact', 'contact')->name('contact');
