<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('landing');
});
Route::resource('/login', LoginController::class);
Route::resource('/register', RegisterController::class);
Route::resource('/dashboard', DashboardController::class);


Route::resource('/jabatan', JabatanController::class);
Route::resource('/divisi', DivisiController::class);
Route::resource('/datapegawai', PegawaiController::class);
