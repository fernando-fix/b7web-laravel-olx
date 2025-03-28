<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MariaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Auth
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login_action'])->name('login.action');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'register_action'])->name('register.action');
Route::get('select-state', [AuthController::class, 'select_state'])->name('select-state');
Route::post('select-state', [AuthController::class, 'select_state_action'])->name('select-state.action');
Route::get('forgot-password', [AuthController::class, 'forgot_password'])->name('forgot-password');
Route::post('forgot-password', [AuthController::class, 'forgot_password_action'])->name('forgot-password.action');
Route::get('reset-password', [AuthController::class, 'reset_password'])->name('reset-password');
Route::post('reset-password', [AuthController::class, 'reset_password_action'])->name('reset-password.action');

// Pages
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/anuncio/{slug}', [AdvertisementController::class, 'show'])->name('advertisement.show');

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth']
], function () {
    Route::resource('profile', ProfileController::class)->only(['edit', 'update']);
    Route::resource('advertisements', AdvertisementController::class);
});
