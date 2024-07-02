<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Standardized Laravel RESTful Routes & Auth Middleware Groups
|
*/

// Public Landing Page Routes
Route::get('/', [ContactController::class, 'index'])->name('home');
Route::post('/', [ContactController::class, 'store'])->name('contact.store');

// Guest Only Routes (Redirects to /homepage if already authenticated)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::get('/register', [AuthController::class, 'index'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Protected Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Dashboard & Goals Management
    Route::get('/homepage', [FormController::class, 'show'])->name('dashboard');
    Route::post('/homepage', [FormController::class, 'store'])->name('goals.store');
    
    Route::get('/update/{id}', [FormController::class, 'edit'])->name('update');
    Route::put('/update/{id}', [FormController::class, 'update'])->name('update-data');
    Route::delete('/goals/{id}', [FormController::class, 'destroy'])->name('goals.destroy');
});
