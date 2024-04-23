<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('chirps', [Controllers\ChirpController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('chirps');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
