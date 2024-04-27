<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\AdoptionsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\SpeciesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitsController;
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

// ----------- AUTHENTICATION -----------
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'createUser']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/recoverSession', [AuthController::class, 'recoverSession']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
Route::middleware(['auth:sanctum', 'restrictRole:worker'])->group(function () {
    Route::post('/createWorker', [AuthController::class, 'createWorker']);
});


// ------------ USER -------------
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [UserController::class, 'getUser']);
    Route::patch('/user', [UserController::class, 'updateUser']);
    Route::patch('/changePassword', [UserController::class, 'changePassword']);
    Route::delete('/user', [UserController::class, 'deleteUser']);
});


// ------------ ADOPTIONS -------------
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/yourAdoptions', [AdoptionsController::class, 'yourAdoptions']);
    Route::post('/requestAdoption', [AdoptionsController::class, 'requestAdoption']);
});
Route::middleware(['auth:sanctum', 'restrictRole:worker'])->group(function () {
    Route::get('/adoptionsByUser/{id}', [AdoptionsController::class, 'getAdoptionsByUser']);
    Route::get('/adoptionsByPet/{id}', [AdoptionsController::class, 'getAdoptionsByPet']);
    Route::patch('/acceptAdoption/{id}', [AdoptionsController::class, 'acceptAdoption']);
    Route::patch('/confirmAdoption/{id}', [AdoptionsController::class, 'confirmAdoption']);
    Route::delete('/cancelAdoption/{id}', [AdoptionsController::class, 'cancelAdoption']);
});



// ------------ PET -------------
Route::get('/pets', [PetController::class, 'getAllPets']);
Route::get('/pet/{id}', [PetController::class, 'getPet']);
Route::middleware('auth:sanctum', 'restrictRole:worker')->group(function () {
    Route::post('/pet', [PetController::class, 'createPet']);
    Route::patch('/pet/{id}', [PetController::class, 'updatePet']);
    Route::delete('/pet/{id}', [PetController::class, 'deletePet']);
});



// ------------ Specie -------------
Route::get('/species', [SpeciesController::class, 'getAllSpecies']);
Route::middleware('auth:sanctum', 'restrictRole:worker')->group(function () {
    Route::post('/specie', [SpeciesController::class, 'createSpecie']);
    Route::delete('/specie/{id}', [SpeciesController::class, 'deleteSpecie']);
});


// ------------ Breed -------------
Route::get('/breeds', [BreedController::class, 'getAllBreeds']);
Route::middleware('auth:sanctum', 'restrictRole:worker')->group(function () {
    Route::post('/breed', [BreedController::class, 'createBreed']);
    Route::delete('/breed/{id}', [BreedController::class, 'deleteBreed']);
});


















// ------------ ADOPTERS -------------
// ------------ VISITS -------------
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/yourVisits', [VisitsController::class, 'yourVisits']);
    Route::delete('/cancelVisit', [VisitsController::class, 'cancelVisit']);
    Route::patch('/updateVisitDate', [VisitsController::class, 'updateVisitDate']);
});
Route::middleware('auth:sanctum', 'restrictRole:worker')->group(function () {
    Route::get('/allVisits', [VisitsController::class, 'allVisits']);
    Route::get('/visitsWithUser', [VisitsController::class, 'visitsWithUser']);
    Route::post('/scheduleVisit', [VisitsController::class, 'scheduleVisit']);
    Route::patch('/visitFinished', [VisitsController::class, 'visitFinished']);
});
