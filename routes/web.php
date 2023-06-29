<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ShowqrController;
use App\Http\Controllers\DownloadController;
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

Route::get('/{qrcode_id}', [ShowqrController::class, 'showcode'])->name("code.show");

Route::get('/qr/{qrcode_id}', [NavController::class, 'showqrcode'])->name("code.showqr");

Route::get('/download/{qrcode_id}', [DownloadController::class, 'downloadFunction'])->name("download_qr");

// Route::get('test', fn () => phpinfo());