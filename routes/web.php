<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Use App\Http\Controllers\FormController;

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

Route::get('/', [ContactController::class, 'index']);

Route::post('/', [ContactController::class, 'store']);

Route::get('/homepage', [FormController::class, 'show'])->middleware('auth');

Route::post('/homepage', [FormController::class, 'store']);

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::get('/register', [AuthController::class, 'index'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/update/{id}', [FormController::class, 'edit'])->name('update');
Route::put('/update/{id}', [FormController::class, 'update'])->name('update-data');

Route::delete('/goals/{id}', [FormController::class, 'destroy'])->name('goals.destroy');
