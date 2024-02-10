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
use App\Http\Controllers\api\MedicalTreatmentController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\RecommendationController;
use App\Http\Controllers\api\VisitController;
use App\Http\Controllers\api\VisitPanelController;
use App\Http\Controllers\api\ChatController;
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
Route::get('/user-info', [LoginController::class, 'getUserInfo'])->middleware('auth:sanctum');

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
    Route::get('/animal/{animal}', [TestController::class, 'showAnimalTests']);
    Route::post('/create', [TestController::class, 'store']);
    Route::patch('/update/{test}', [TestController::class, 'update']);
    Route::delete('/destroy/{test}', [TestController::class, 'destroy']);
});

Route::prefix('medical-treatment')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [MedicalTreatmentController::class, 'index']);
    Route::get('/{medicalTreatment}', [MedicalTreatmentController::class, 'show']);
    Route::post('/create', [MedicalTreatmentController::class, 'store']);
    Route::patch('/update/{medicalTreatment}', [MedicalTreatmentController::class, 'update']);
    Route::delete('/destroy/{medicalTreatment}', [MedicalTreatmentController::class, 'destroy']);
});

Route::prefix('user')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{user}', [UserController::class, 'show']);
    Route::post('/create', [UserController::class, 'store']);
    Route::patch('/update/{user}', [UserController::class, 'update']);
    Route::delete('/destroy/{user}', [UserController::class, 'destroy']);
});

Route::prefix('recommendation')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [RecommendationController::class, 'index']);
    Route::get('/{recommendation}', [RecommendationController::class, 'show']);
    Route::post('/create', [RecommendationController::class, 'store']);
    Route::patch('/update/{recommendation}', [RecommendationController::class, 'update']);
    Route::delete('/destroy/{recommendation}', [RecommendationController::class, 'destroy']);
});

Route::prefix('visit')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [VisitController::class, 'index']);
    Route::get('/{visit}', [VisitController::class, 'show']);
    Route::patch('/update/{visit}', [VisitController::class, 'update']);
});

Route::prefix('visit-panel')->middleware('auth:sanctum')->group(function () {
    Route::get('/{visit}', [VisitPanelController::class, 'show']);
});

Route::prefix('chat')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [ChatController::class, 'index']);
    Route::get('/{id}', [ChatController::class, 'show']);
    Route::post('/create', [ChatController::class, 'store']);
});

