<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    Route::inertia('/user', 'Profile/Settings')->name('user.settings');
    Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
    Route::put('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
    Route::post('/publication/store', [PublicationController::class, 'store'])->name('publication.store');
    Route::put('/like', [PublicationController::class, 'like'])->name('publication.like');
    Route::put('/unlike', [PublicationController::class, 'unlike'])->name('publication.unlike');
});
