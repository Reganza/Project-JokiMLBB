<?php

use App\Http\Controllers\ListJokiController;
use App\Http\Controllers\PemesananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pemesanan', PemesananController::class);
Route::resource('listjoki', ListJokiController::class);