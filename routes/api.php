<?php

use App\Http\Controllers\AdminController;
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


// ------------ PET -------------

Route::middleware('auth:sanctum')->group(function () {
    
});

















// ------------ ADOPTERS -------------



