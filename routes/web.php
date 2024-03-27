<?php

use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\DiseasesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SessionController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Guest can access
Route::get('/', [LandingController::class, 'index']);

// User cannot access
Route::group(['middleware' => 'alrlogin'], function () {
    // Login
    Route::get('/login', [SessionController::class, 'index']);
    Route::post('/login/user', [SessionController::class, 'login']);
    // Signup
    Route::get('/signup', [SessionController::class, 'signup']);
    Route::post('/signup/user', [SessionController::class, 'create']);

});

// User can access
Route::group(['middleware' => 'userlogin'], function () {
    // Logout
    Route::get('/logout', [SessionController::class, 'logout']);
    // Home
    Route::get('/home', [HomeController::class, 'index']);
    // Diagnose
    Route::get('/diagnose', [DiagnosisController::class, 'diagnosis']);
    // Diseases
    Route::get('/diseases', [DiseasesController::class, 'diseases']);
});

