<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['guest', 'first.user.only'])->group(function () {
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'RegisterController@register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@invoke')->name('home');
});
