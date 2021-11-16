<?php

use Illuminate\Support\Facades\Route;
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

/*Route::get('/', function () {
    return view('welcome');
});*/



//Halaman dashboard
Route::get('/', [GuestController::class, 'beranda']);

//Halaman service
// <<<<<<< HEAD
Route::get('/pelayanan', [GuestController::class, 'pelayanan']); //->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// =======

//Halaman data pasien
Route::get('/data-pasien', [GuestController::class, 'pasien']);

//Halaman User
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'loginAkun']);
Route::get('/profil', [UserController::class, 'profil']);
Route::post('/logout', [UserController::class, 'logoutAkun']);
Route::get('/profil/{id}', [UserController::class, 'detail']);
Route::get('/profil/edit/{id}', [UserController::class, 'edit']);
Route::post('/profil/update/{id}', [UserController::class, 'update']);
// >>>>>>> 20580cd (profil petugas)
