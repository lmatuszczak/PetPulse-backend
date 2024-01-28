<?php

use App\Http\Controllers\Api\AnimalController;
use App\Http\Controllers\Api\AnimalTypeController;
use App\Http\Controllers\Api\OwnerController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\BreedController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\CalendarController;
use App\Http\Controllers\Api\TestController;
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
    Route::get('/', [AnimalController::class, 'index']);
    Route::get('/{animal}', [AnimalController::class, 'show']);
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

Route::prefix('owner')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [OwnerController::class, 'index']);
    Route::get('/{owner}', [OwnerController::class, 'show']);
    Route::post('/create', [OwnerController::class, 'store']);
    Route::patch('/update/{owner}', [OwnerController::class, 'update']);
});

Route::prefix('role')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [RoleController::class, 'index']);
});

Route::prefix('calendar')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [CalendarController::class, 'index']);
    Route::get('/{calendar}', [CalendarController::class, 'show']);
    Route::post('/create', [CalendarController::class, 'store']);
    Route::patch('/update/{calendar}', [CalendarController::class, 'update']);
    Route::delete('/destroy/{calendar}', [CalendarController::class, 'destroy']);
});

Route::prefix('test')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [TestController::class, 'index']);
    Route::get('/{test}', [TestController::class, 'show']);
    Route::post('/create', [TestController::class, 'store']);
    Route::patch('/update/{test}', [TestController::class, 'update']);
    Route::delete('/destroy/{test}', [TestController::class, 'destroy']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
