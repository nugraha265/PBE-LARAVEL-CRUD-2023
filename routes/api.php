<?php

use App\Http\Controllers\KaryawanAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgamaAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Routing Agama
Route::get('/tabel-agama', [AgamaAPIController::class, 'index']);
Route::post('/tabel-agama', [AgamaAPIController::class, 'store']);
Route::put('/agama/{id}', [AgamaAPIController::class, 'update']);
Route::delete('/agama/{id}',[AgamaAPIController::class, 'destroy']);

//Routing Data Karyawan
Route::get('/tabel-karyawan', [KaryawanAPIController::class, 'index']);
Route::post('/tabel-karyawan', [KaryawanAPIController::class, 'store']);
Route::put('/karyawan/{id}', [KaryawanAPIController::class, 'update']);
Route::delete('/karyawan/{id}',[KaryawanAPIController::class, 'destroy']);
