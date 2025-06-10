<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\UserController;

Route::get('locale/{locale}', [LocalizationController::class, 'setLocale']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-up', [UserController::class, 'create'])->name('users.create');
Route::post('/sign-up', [UserController::class, 'store'])->name('users.store');