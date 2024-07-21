<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


# ADMIN
Route::get('/', function () {
    return view('admin.dashboard');
});
Route::get('/pendaftaran-admin', function () {
    return view('admin.pendaftaran');
});

#ADMIN#
// Dokter
Route::get('/datadokter', [DokterController::class, 'index']);
Route::get('/datadokter-add', [DokterController::class, 'create']);
Route::post('/datadokter', [DokterController::class, 'store']);
Route::get('/datadokter-edit/{id}', [DokterController::class, 'edit']);
Route::put('/datadokter/{id}', [DokterController::class, 'update']);
Route::delete('/datadokter-destroy/{id}', [DokterController::class, 'destroy']);

// Pasien
Route::get('/datapasien', [PasienController::class, 'index']);
Route::get('/datapasien-add', [PasienController::class, 'create']);
Route::post('/datapasien', [PasienController::class, 'store']);
Route::get('/datapasien-edit/{id}', [PasienController::class, 'edit']);
Route::put('/datapasien/{id}', [PasienController::class, 'update']);
Route::delete('/datapasien-destroy/{id}', [PasienController::class, 'destroy']);

// Obat
Route::get('/dataobat', [ObatController::class, 'index']);
Route::get('/dataobat-add', [ObatController::class, 'create']);
Route::post('/dataobat', [ObatController::class, 'store']);
Route::get('/dataobat-edit/{id}', [ObatController::class, 'edit']);
Route::put('/dataobat/{id}', [ObatController::class, 'update']);
Route::delete('/dataobat-destroy/{id}', [ObatController::class, 'destroy']);
