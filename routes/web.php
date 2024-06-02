<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InertiaTestController;

Route::get('/', function () {
    return view('home');
});
Route::get('/homeTest', [InertiaTestController::class, 'index']);
