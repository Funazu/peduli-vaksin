<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MasterVaccinationController;
use App\Http\Controllers\DataVaccinationController;


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

Route::get('/', function () {
    return redirect('/auth/login');
});

Route::get('/auth/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'loginPost'])->middleware('guest');
Route::post('/auth/logout', [AuthController::class, 'logout']);

// Profile
Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::put('/dashboard/profile/edit/{user:id}', [ProfileController::class, 'update'])->middleware('auth');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Masyarakat
Route::get('/dashboard/masyarakat', [MasyarakatController::class, 'index'])->name('masyarakat')->middleware('auth');

Route::get('/dashboard/masyarakat/create', [MasyarakatController::class, 'create'])->middleware('auth');
Route::post('/dashboard/masyarakat/create', [MasyarakatController::class, 'store'])->middleware('auth');

Route::get('/dashboard/masyarakat/edit/{warga_masyarakat:id}', [MasyarakatController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/masyarakat/edit/{warga_masyarakat:id}', [MasyarakatController::class, 'put'])->middleware('auth');
Route::post('/dashboard/masyarakat/delete/{warga_masyarakat:id}', [MasyarakatController::class, 'delete'])->middleware('auth');

// Lokasi
Route::get('/dashboard/lokasi', [LokasiController::class, 'index'])->name('lokasi')->middleware('auth');
Route::get('/dashboard/lokasi/create', [LokasiController::class, 'create'])->middleware('auth');
Route::post('/dashboard/lokasi/create', [LokasiController::class, 'store'])->middleware('auth');
Route::get('/dashboard/lokasi/edit/{master_location_vaccination:id}', [LokasiController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/lokasi/edit/{master_location_vaccination:id}', [LokasiController::class, 'put'])->middleware('auth');

// MasterVaksin
Route::get('/dashboard/mastervaccination', [MasterVaccinationController::class, 'index'])->name('mastervaccination')->middleware('auth');
Route::get('/dashboard/mastervaccination/create', [MasterVaccinationController::class, 'create'])->middleware('auth');
Route::post('/dashboard/mastervaccination/create', [MasterVaccinationController::class, 'store'])->middleware('auth');
Route::get('/dashboard/mastervaccination/edit/{master_vaccination:id}', [MasterVaccinationController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/mastervaccination/edit/{master_vaccination:id}', [MasterVaccinationController::class, 'put'])->middleware('auth');
Route::post('/dashboard/mastervaccination/delete/{master_vaccination:id}', [MasterVaccinationController::class, 'destroy'])->middleware('auth');

// Data Vakasin
Route::get('/dashboard/datavaccination', [DataVaccinationController::class, 'index'])->name('datavaccination')->middleware('auth');
Route::get('/dashboard/datavaccination/create', [DataVaccinationController::class, 'create'])->middleware('auth');

Route::post('/dashboard/datavaccination/create', [DataVaccinationController::class, 'store'])->middleware('auth');
Route::get('/dashboard/datavaccination/edit/{data_vaccination}', [DataVaccinationController::class, 'edit'])->middleware('auth');

