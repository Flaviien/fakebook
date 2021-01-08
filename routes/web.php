<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\PublicationController;

Route::get('/', function () {
    return view('auth/login');
})->name('login-page');

Route::get('/register-page', function () {
    return view('auth/register');
})->name('register-page');

/* Les routes protégés */
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    /* Route::inertia('/dashboard', [PublicationController::class, 'index'])->name('dashboard'); */
    Route::get('/dashboard', [PublicationController::class, 'index'])->name('dashboard');
    Route::inertia('/user', 'Profile/Show')->name('user.show');
    Route::post('/publication/store', [PublicationController::class, 'store'])->name('publication.store');
});
