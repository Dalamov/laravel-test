<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MediaController;
use App\Http\Controllers\API\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [MediaController::class, 'index']);


Route::get('home', [MediaController::class, 'index']);


Route::get('/registerPage', function () {
    return view('auth/registerPage');
});

Route::get('/loginPage', function () {
    return view('auth/loginPage');
});

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/uploadMedia', function () {
    return view('uploadMedia/uploadMedia');
});
