<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
});
Route::get('/jadwal', function () {
    return view('welcome');
});

// Route::get('/create', JadwalController::class,'create');

Route::resource('jadwal', JadwalController::class);

Route::post('/register/input', [AuthController::class,'registerAccount'])->name('storeregist');
Route::get('/register', [AuthController::class,'indexRegister'])->name('register');

Route::post('/login/auth', [AuthController::class,'auth'])->name('login-auth');
Route::get('/login', [AuthController::class,'indexLogin'])->name('login');