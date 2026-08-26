<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminCareerController;

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


// Submit Job Application

Route::post('/careers/{id}/apply', [CareerController::class, 'apply'])
    ->name('careers.apply');

    // Admin Authentication

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');


// Admin Career Management

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::resource('careers', AdminCareerController::class)
            ->except(['show']);

    });
