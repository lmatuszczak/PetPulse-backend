<?php

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AnimalTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');

Route::prefix('animal')->group(function () {
    Route::get('/{animal}', [AnimalController::class, 'index']);
    Route::post('/create', [AnimalController::class, 'store']);
    Route::patch('/update/{animal}', [AnimalController::class, 'update']);
    Route::delete('/destroy/{animal}', [AnimalController::class, 'destroy']);
});

Route::prefix('animal-type')->group(function () {
    Route::get('/', [AnimalTypeController::class, 'index']);
    Route::get('/{animalType}', [AnimalTypeController::class, 'show']);
    Route::post('/create', [AnimalTypeController::class, 'store']);
    Route::patch('/update/{animalType}', [AnimalTypeController::class, 'update']);
    Route::delete('/destroy/{animalType}', [AnimalTypeController::class, 'destroy']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
