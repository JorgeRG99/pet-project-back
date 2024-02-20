<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdoptionsController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;
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
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'createUser']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [UserController::class, 'logout']);
});

// ------------ ADMIN -------------
Route::post('/loginAdmin', [AdminController::class, 'loginAdmin']);
Route::post('/createAdmin', [AdminController::class, 'createAdmin']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logOutAdmin', [AdminController::class, 'logOutAdmin']);
});

// ------------ USER -------------
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [UserController::class, 'getUser']);
    Route::patch('/user', [UserController::class, 'updateUser']);
    Route::delete('/user', [UserController::class, 'deleteUser']);
});

// ------------ ADOPTIONS -------------
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/yourAdoptions', [AdoptionsController::class, 'yourAdoptions']);
    Route::get('/adoptionsByUser', [AdoptionsController::class, 'getAdoptionsByUser']);
    Route::get('/adoptionsByPet', [AdoptionsController::class, 'getAdoptionsByPet']);
    Route::post('/requestAdoption', [AdoptionsController::class, 'requestAdoption']);
    Route::post('/acceptAdoption', [AdoptionsController::class, 'acceptAdoption']);
    Route::patch('/confirmAdoption', [AdoptionsController::class, 'confirmAdoption']);
    Route::delete('/cancelAdoption', [AdoptionsController::class, 'cancelAdoption']);
});



// ------------ PET -------------
Route::get('/pets', [PetController::class, 'getAllPets']);
Route::post('/pet', [PetController::class, 'createPet']);
Route::get('/pet/{id}', [PetController::class, 'getPet']);
Route::patch('/pet/{id}', [PetController::class, 'updatePet']);
Route::delete('/pet/{id}', [PetController::class, 'deletePet']);



















// ------------ ADOPTERS -------------
