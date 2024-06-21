<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Master\DivisiController;
use App\Http\Controllers\Master\JabatanController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'index']);
Route::resource('/login', LoginController::class);
Route::post('/proseslogin', [LoginController::class, 'autentikasi']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'buatakun'])->name('register');

Route::middleware(['auth'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/jabatan', JabatanController::class);
    Route::resource('/divisi', DivisiController::class);
    Route::resource('/datapegawai', PegawaiController::class);
});
