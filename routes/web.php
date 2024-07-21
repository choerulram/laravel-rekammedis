<?php

use App\Http\Controllers\DokterController;
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
Route::get('/datadokter-admin', function () {
    return view('admin.datadokter');
});
Route::get('/datapasien-admin', function () {
    return view('admin.datapasien');
});
Route::get('/dataobat-admin', function () {
    return view('admin.dataobat');
});

Route::get('/datadokter', [DokterController::class, 'index']);
Route::get('/datadokter/{id}', [DokterController::class, 'show']);
Route::get('/datadokter-add', [DokterController::class, 'create']);
Route::post('/datadokter', [DokterController::class, 'store']);
Route::get('/datadokter-edit/{id}', [DokterController::class, 'edit']);
Route::put('/datadokter/{id}', [DokterController::class, 'update']);
Route::delete('/datadokter-destroy/{id}', [DokterController::class, 'destroy']);
