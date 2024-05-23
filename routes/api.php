<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\AdoptionsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\CareServicesController;
use App\Http\Controllers\ExternalPetsController;
use App\Http\Controllers\SpeciesController;
use App\Http\Controllers\TrainingServicesController;
use App\Http\Controllers\UserController;
use App\Models\ExternalPets;
use Illuminate\Support\Facades\Route;

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
    Route::patch('/user', [UserController::class, 'updateUser']);
    Route::patch('/changePassword', [UserController::class, 'changePassword']);
    Route::patch('/changeEmail', [UserController::class, 'changeEmail']);
    Route::delete('/user', [UserController::class, 'deleteUser']);
});


// ------------ ADOPTIONS -------------
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/yourAdoptions', [AdoptionsController::class, 'yourAdoptions']);
    Route::post('/requestAdoption', [AdoptionsController::class, 'requestAdoption']);
    Route::patch('/cancelAdoption', [AdoptionsController::class, 'cancelAdoption']);
});
Route::middleware('auth:sanctum', 'restrictRole:worker')->group(function () {
    Route::get('/allAdoptions', [AdoptionsController::class, 'allAdoptions']);
    Route::get('/adoptionsByUser/{id}', [AdoptionsController::class, 'getAdoptionsByUser']);
    Route::get('/adoptionsByPet/{id}', [AdoptionsController::class, 'getAdoptionsByPet']);
    Route::patch('/acceptAdoption', [AdoptionsController::class, 'acceptAdoption']);
    Route::patch('/confirmAdoption', [AdoptionsController::class, 'confirmAdoption']);
});


// ------------ PET -------------
Route::get('/dogs', [PetController::class, 'getDogs']);
Route::get('/cats', [PetController::class, 'getCats']);
Route::get('/pet/{id}', [PetController::class, 'getPet']);
Route::middleware('auth:sanctum', 'restrictRole:worker')->group(function () {
    Route::get('/pets', [PetController::class, 'getAllPets']);
    Route::post('/pet', [PetController::class, 'createPet']);
    Route::patch('/pet', [PetController::class, 'updatePet']);
    Route::delete('/pet', [PetController::class, 'deletePet']);
});


// ------------ EXTERNAL PET -------------
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/petsWithDeleted', [ExternalPetsController::class, 'getAllPetsWithDeleted']);
    Route::get('/yourPetsWithDeleted', [ExternalPetsController::class, 'getYourPetsIncludingDeleted']);
    Route::get('/yourPets', [ExternalPetsController::class, 'getYourPets']);
    Route::get('/yourCats', [ExternalPetsController::class, 'getYourCats']);
    Route::get('/yourDogs', [ExternalPetsController::class, 'getYourDogs']);
    Route::post('/addPet', [ExternalPetsController::class, 'createPet']);
    Route::patch('/updatePet', [ExternalPetsController::class, 'updatePet']);
    Route::delete('/deletePet', [ExternalPetsController::class, 'deletePet']);
});


// ------------ SPECIE -------------
Route::get('/species', [SpeciesController::class, 'getAllSpecies']);
Route::middleware('auth:sanctum', 'restrictRole:worker')->group(function () {
    Route::post('/specie', [SpeciesController::class, 'createSpecie']);
    Route::delete('/specie/{id}', [SpeciesController::class, 'deleteSpecie']);
});


// ------------ BREED -------------
Route::get('/breeds', [BreedController::class, 'getAllBreeds']);
Route::middleware('auth:sanctum', 'restrictRole:worker')->group(function () {
    Route::post('/breed', [BreedController::class, 'createBreed']);
    Route::delete('/breed/{id}', [BreedController::class, 'deleteBreed']);
});


// ------------ CARE SERVICES -------------   
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/unavailableDates', [CareServicesController::class, 'getUnavailableDates']);
    Route::get('/yourBookings', [CareServicesController::class, 'yourCareServices']);
    Route::post('/makeBooking', [CareServicesController::class, 'createCareService']);
    Route::patch('/deleteBooking', [CareServicesController::class, 'deleteCareService']);
});
Route::middleware('auth:sanctum', 'restrictRole:worker')->group(function () {
    Route::get('/allBookings', [CareServicesController::class, 'getAllCareServices']);
    Route::get('/bookingsPanel', [CareServicesController::class, 'getPanel']);
});

// ------------ TRAINING SERVICES -------------
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/yourTrainingBookings', [TrainingServicesController::class, 'yourTrainingAppointments']);
    Route::get('/fullDates', [TrainingServicesController::class, 'getFullBookedDates']);
    Route::get('/availableHours', [TrainingServicesController::class, 'getAvailableHours']);
    Route::post('/scheduleTraining', [TrainingServicesController::class, 'scheduleTraining']);
    Route::patch('/deleteTraining', [TrainingServicesController::class, 'cancelTraining']);
});
Route::middleware('auth:sanctum', 'restrictRole:worker')->group(function () {
    Route::get('/trainingPanel', [TrainingServicesController::class, 'getPanel']);
});
