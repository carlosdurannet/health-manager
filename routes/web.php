<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BloodPressureRecordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\AllowFirstUserOnly;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest', AllowFirstUserOnly::class])->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', HomeController::class)->name('home');

    Route::get('/bpr/create', [BloodPressureRecordController::class, 'create'])->name('bpr.create');
    Route::post('/bpr/create', [BloodPressureRecordController::class, 'store'])->name('bpr.store');
    Route::get('/bpr/{record}/edit', [BloodPressureRecordController::class, 'edit'])->name('bpr.edit');
    Route::put('/bpr/{record}/update', [BloodPressureRecordController::class, 'update'])->name('bpr.update');

    Route::resource('activity', ActivityController::class);

});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('throttle:10,1');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
