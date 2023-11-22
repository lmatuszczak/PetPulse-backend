<?php

use App\Http\Controllers\Api\AnimalController;
use App\Http\Controllers\Api\AnimalTypeController;
use App\Http\Controllers\Api\OwnerController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\BreedController;
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

Route::prefix('animal')->middleware('auth:sanctum')->group(function () {
    Route::get('/{animal}', [AnimalController::class, 'index']);
    Route::post('/create', [AnimalController::class, 'store']);
    Route::patch('/update/{animal}', [AnimalController::class, 'update']);
    Route::delete('/destroy/{animal}', [AnimalController::class, 'destroy']);
});

Route::prefix('animal-type')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [AnimalTypeController::class, 'index']);
    Route::get('/{animalType}', [AnimalTypeController::class, 'show']);
    Route::post('/create', [AnimalTypeController::class, 'store']);
    Route::patch('/update/{animalType}', [AnimalTypeController::class, 'update']);
    Route::delete('/destroy/{animalType}', [AnimalTypeController::class, 'destroy']);
});

Route::prefix('breed')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [BreedController::class, 'index']);
    Route::get('/{breed}', [BreedController::class, 'show']);
    Route::post('/create', [BreedController::class, 'store']);
    Route::patch('/update/{breed}', [BreedController::class, 'update']);
    Route::delete('/destroy/{breed}', [BreedController::class, 'destroy']);
});

Route::prefix('owner')->group(function () {
    Route::get('/', [OwnerController::class, 'index']);
    Route::get('/{owner}', [OwnerController::class, 'show']);
    Route::post('/create', [OwnerController::class, 'store']);
    Route::patch('/update/{owner}', [OwnerController::class, 'update']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
