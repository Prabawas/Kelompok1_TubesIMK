<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;

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



//Halaman dashboard
Route::get('/', [GuestController::class, 'beranda']);

//daftar data pasien
Route::get('/pelayanan', [PasienController::class, 'pelayanan'])->middleware('auth');
Route::post('/pelayanan', [PasienController::class, 'registerPasien']);

//Halaman data pasien
Route::get('/data-pasien', [PasienController::class, 'pasien'])->middleware('auth');

//Halaman User
Route::get('/register', [UserController::class, 'register'])->middleware('pemilik');
Route::post('/register', [UserController::class, 'registerAkun'])->middleware('pemilik');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'loginAkun']);
Route::get('/profil', [UserController::class, 'profil']);
Route::post('/logout', [UserController::class, 'logoutAkun']);
Route::get('/profil/{id}', [UserController::class, 'detail']);
Route::get('/profil/edit/{id}', [UserController::class, 'edit']);
Route::post('/profil/update/{id}', [UserController::class, 'update']);
Route::post('/profil/delete/{id}', [UserController::class, 'delete']);

