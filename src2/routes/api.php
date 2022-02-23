<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\MediaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

//AUTH
Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);
Route::get('auth/{id}', [AuthController::class, 'show']);
Route::get('logout', [AuthController::class, 'signOut']);

//MEDIA
Route::get('media', [MediaController::class, 'index']);
Route::get('media/{id}', [MediaController::class, 'show']);
Route::post('media', [MediaController::class, 'store']);
Route::delete('media', [MediaController::class, 'destroy']);
Route::put('media', [MediaController::class, 'update']);

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('blogs', BlogController::class);
});

