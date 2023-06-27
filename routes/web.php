<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\GenerateCodeController;

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

Route::get('/', [NavController::class, 'home']);

Route::get('/about', [NavController::class, 'about']);

Route::get('/contact', [NavController::class, 'contact']);

Route::post('/convert', [GenerateCodeController::class, 'Qrfunction'])->name("convertAction");

Route::get('/code/{id}', [NavController::class, 'showcode'])->name("code.show");