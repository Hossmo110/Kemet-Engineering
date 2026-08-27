
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminCareerController;


/*
|--------------------------------------------------------------------------
| WEBSITE
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/businesses', 'businesses')->name('businesses');

Route::view('/innovation', 'innovation')->name('innovation');

Route::view('/csr', 'csr')->name('csr');

Route::view('/contact', 'contact')->name('contact');


/*
|--------------------------------------------------------------------------
| PUBLIC CAREERS
|--------------------------------------------------------------------------
*/

Route::get('/careers', [CareerController::class, 'index'])
    ->name('careers.index');

Route::get('/careers/{id}', [CareerController::class, 'show'])
    ->name('careers.show');

Route::post('/careers/{id}/apply', [CareerController::class, 'apply'])
    ->name('careers.apply');


/*
|--------------------------------------------------------------------------
| ADMIN AUTHENTICATION
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');


/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->prefix('admin')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | ADMIN DASHBOARD
    |--------------------------------------------------------------------------
    |
    | /admin
    | This is now the main Admin page.
    |
    */

    Route::get('/', [AdminCareerController::class, 'index'])
        ->name('admin.dashboard');


    /*
    |--------------------------------------------------------------------------
    | CAREER JOBS
    |--------------------------------------------------------------------------
    */

    // Add new job
    Route::get('/careers/create', [AdminCareerController::class, 'create'])
        ->name('admin.careers.create');

    // Store new job
    Route::post('/careers', [AdminCareerController::class, 'store'])
        ->name('admin.careers.store');

    // Edit job
    Route::get('/careers/{id}/edit', [AdminCareerController::class, 'edit'])
        ->name('admin.careers.edit');

    // Update job
    Route::put('/careers/{id}', [AdminCareerController::class, 'update'])
        ->name('admin.careers.update');

    // Delete job
    Route::delete('/careers/{id}', [AdminCareerController::class, 'destroy'])
        ->name('admin.careers.destroy');

});
