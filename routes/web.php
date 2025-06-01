<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;

Route::get('locale/{locale}', [LocalizationController::class, 'setLocale']);

Route::get('/', function () {
    return view('welcome');
});
