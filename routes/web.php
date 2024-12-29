<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest', 'first.user.only'])->group(function () {
    Route::get('/register', RegisterController::class, 'showRegistrationForm')->name('register');
    Route::post('/register', RegisterController::class, 'register');
    Route::get('/login', LoginController::class, 'showLoginForm')->name('login');
    Route::post('/login', LoginController::class, 'login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@invoke')->name('home');
});

Route::post('/logout', LoginController::class, 'logout')->name('logout')->middleware('auth');
