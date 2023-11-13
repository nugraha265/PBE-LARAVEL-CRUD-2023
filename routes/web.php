<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\agamaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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
    return view('welcome');
});
//webpages in general
Route::resource('/home', homeController::class)->middleware('auth');
Route::resource('/blog',blogController::class)->middleware('auth');
Route::resource('/kontak', kontakController::class)->middleware('auth');
Route::get('/form', function () {
    return view('webpages.form');
})->middleware('auth');
Route::get('/tabel', function () {
    return view('webpages.tabel');
})->middleware('auth');

//Routing Agama
Route::get('/tabel-agama', [agamaController::class, 'index'])->name('agama.index')->middleware('auth');
Route::get('/form-agama', [agamaController::class, 'create'])->name('agama.create')->middleware('auth');
Route::post('/tabel-agama', [agamaController::class, 'store'])->name('agama.store')->middleware('auth');
Route::get('/agama/{id}/edit', [agamaController::class, 'edit'])->name('agama.edit')->middleware('auth');
Route::put('/agama/{id}', [agamaController::class, 'update'])->name('agama.update')->middleware('auth');
Route::delete('/agama/{id}',[agamaController::class, 'destroy'])->name('agama.destroy')->middleware('auth');

//Routing Data Karyawan
Route::get('/tabel-karyawan', [karyawanController::class, 'index'])->name('karyawan.index')->middleware('auth');
Route::get('/form-karyawan', [karyawanController::class, 'create'])->name('karyawan.create')->middleware('auth');
Route::post('/tabel-karyawan', [karyawanController::class, 'store'])->name('karyawan.store')->middleware('auth');
Route::get('/karyawan/{id}/edit', [karyawanController::class, 'edit'])->name('karyawan.edit')->middleware('auth');
Route::put('/karyawan/{id}', [karyawanController::class, 'update'])->name('karyawan.update')->middleware('auth');
Route::delete('/karyawan/{id}',[karyawanController::class, 'destroy'])->name('karyawan.destroy')->middleware('auth');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('auth.register.form')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register')->middleware('guest');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login.form')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard')->middleware('auth');
