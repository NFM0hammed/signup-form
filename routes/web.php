<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', [UsersController::class, 'index',])->name(name: 'users.index');
Route::post('access', [UsersController::class, 'store'])->name(name: 'users.store');
Route::get('access', function() { return view('reject'); });
