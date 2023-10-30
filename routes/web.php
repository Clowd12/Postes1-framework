<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManhwaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get('/register', function () {
    return view('register');
});

Route::get('/register',[RegisterController::class,'create']);
Route::post( '/register', [RegisterController::class, 'store'])->name('register');

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post( '/login', [LoginController::class, 'authenticate'])->name('auth');

Route::get('/bookmark', function () {
    return view('bookmark');
});

Route::get('/index',[MangaController::class,'index']);
Route::post( '/tambah/store', [MangaController::class, 'store']);

Route::get('/index',[ManhwaController::class,'index']);
Route::post( '/tambah/store', [ManhwaController::class, 'store']);

Route::get('/tambah', function () {
    return view('tambah');
});
