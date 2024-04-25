<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\DiseasesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SessionController; 
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoryController;

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
    Route::post('/diagnose', [DiagnosisController::class, 'diagnosisRun']) -> name('diagnosisRun');
    // Diseases
    Route::get('/diseases', [DiseasesController::class, 'diseases']);
    // Profile
    Route::get('/profile', [ProfileController::class, 'profile']);
    // Update Profile
    Route::get('/profile/update/{id}', [ProfileController::class, 'update']);
    Route::put('/profile/update', [ProfileController::class, 'updateProfile']) -> name('updateProfile');
    // History
    Route::get('/history', [HistoryController::class, 'history']);
});

