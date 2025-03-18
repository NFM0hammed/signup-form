<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::controller(UsersController::class)->group(function () {
    Route::get('/', 'signin')->name('signin');
    Route::post('/', 'login')->name('login');

    Route::get('/register', 'signup')->name('signup');
    Route::post('/register', 'store')->name('store');

    Route::get('/profile', 'profile')->middleware('auth')->name('profile');

    Route::get('/logout', 'logout')->name('logout');
});
