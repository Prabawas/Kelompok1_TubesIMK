<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

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

//Halaman about
Route::get('/tentang', [GuestController::class, 'tentang']);

//Halaman service
Route::get('/pelayanan', [GuestController::class, 'pelayanan'])->middleware('auth');

//Halaman doctor
Route::get('/dokter', [GuestController::class, 'dokter']);

//Halaman Contact
Route::get('/kontak', [GuestController::class, 'kontak']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
