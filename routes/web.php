<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\DiseasesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SessionController; 
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoriesController;
use App\Http\Controllers\AdminController;

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
Route::get('/admin', [AdminController::class, 'index']);

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
    Route::post('/diagnose', [DiagnosisController::class, 'selectdiagnosis']) -> name('selectdiagnosis');
    Route::post('/diagnose/run', [DiagnosisController::class, 'diagnosisRun']) -> name('diagnosisRun');

    // Diseases
    Route::get('/diseases', [DiseasesController::class, 'diseases']);
    // Profile
    Route::get('/profile', [ProfileController::class, 'profile']);
    // Update Profile
    Route::get('/profile/update/{id}', [ProfileController::class, 'update']);
    Route::put('/profile/update', [ProfileController::class, 'updateProfile']) -> name('updateProfile');
    // History
    Route::get('/history', [HistoriesController::class, 'history']);
});

// Admin cannot access
Route::group(['middleware' => 'adminauthenticated'], function () {
    // Login
    Route::get('/admin/login', [AdminController::class, 'login']);
    Route::post('/admin/login', [AdminController::class, 'loginAdmin']) -> name('loginAdmin');
});

// Admin can access
Route::group(['middleware' => 'adminlogin'], function () {
    // Logout
    Route::get('/admin/logout', [AdminController::class, 'logout']);
    // Home
    Route::get('/admin/home', [AdminController::class, 'home']);
    // Administrator
    Route::get('/admin/administrator', [AdminController::class, 'administrator']);
    // Whatsapp
    Route::get('/admin/whatsapp', [AdminController::class, 'whatsapp']);
    Route::put('/admin/whatsapp/update', [AdminController::class, 'updateWhatsapp']) -> name('updateWhatsapp');
    
    //Admin
    Route::get('/admin/administrator/add', [AdminController::class, 'addAdmin']);
    Route::post('/admin/administrator/create', [AdminController::class, 'createAdmin']) -> name('createAdmin');
    Route::get('/admin/administrator/update/{id}', [AdminController::class, 'updateAdmin']);
    Route::put('/admin/administrator/edit/{id}', [AdminController::class, 'editAdmin']) -> name('editAdmin');
    Route::get('/admin/administrator/delete/{id}', [AdminController::class, 'deleteAdmin']) -> name('deleteAdmin');
    
    // Symptoms
    Route::get('/admin/symptoms', [AdminController::class, 'symptoms']);
    Route::get('/admin/symptoms/add', [AdminController::class, 'addSymptoms']);
    Route::post('/admin/symptoms/create', [AdminController::class, 'createSymptoms']) -> name('createSymptoms');
    Route::get('/admin/symptoms/update/{id}', [AdminController::class, 'updateSymptoms']);
    Route::put('/admin/symptoms/edit/{id}', [AdminController::class, 'editSymptoms']) -> name('editSymptoms');
    Route::get('/admin/symptoms/delete/{id}', [AdminController::class, 'deleteSymptoms']) -> name('deleteSymptoms');
    
    // Diseases
    Route::get('/admin/diseases', [AdminController::class, 'diseases']);
    Route::get('/admin/diseases/add', [AdminController::class, 'addDiseases']);
    Route::post('/admin/diseases/create', [AdminController::class, 'createDiseases']) -> name('createDiseases');
    Route::get('/admin/diseases/update/{id}', [AdminController::class, 'updateDiseases']);
    Route::put('/admin/diseases/edit/{id}', [AdminController::class, 'editDiseases']) -> name('editDiseases');
    Route::get('/admin/diseases/delete/{id}', [AdminController::class, 'deleteDiseases']) -> name('deleteDiseases');

    // Users
    Route::get('/admin/user', [AdminController::class, 'user']);
    Route::get('/admin/user/add', [AdminController::class, 'addUser']);
    Route::post('/admin/user/create', [AdminController::class, 'createUser']) -> name('createUser');
    Route::get('/admin/user/update/{id}', [AdminController::class, 'updateUser']);
    Route::put('/admin/user/edit/{id}', [AdminController::class, 'editUser']) -> name('editUser');
    Route::get('/admin/user/delete/{id}', [AdminController::class, 'deleteUser']) -> name('deleteUser');
    
    //Rules
    Route::get('/admin/rules', [AdminController::class, 'rules']);
    Route::get('/admin/rules/add', [AdminController::class, 'addRules']);
    Route::post('/admin/rules/create', [AdminController::class, 'createRules']) -> name('createRules');
    Route::get('/admin/rules/update/{id}', [AdminController::class, 'updateRules']);
    Route::put('/admin/rules/edit/{id}', [AdminController::class, 'editRules']) -> name('editRules');
    Route::get('/admin/rules/delete/{id}', [AdminController::class, 'deleteRules']) -> name('deleteRules');
    Route::get('/admin/rules/search', [AdminController::class, 'searchRules']);
    
    // Histories
    Route::get('/admin/history', [AdminController::class, 'history']);
    Route::get('/admin/history/search', [AdminController::class, 'searchHistory']);
});

