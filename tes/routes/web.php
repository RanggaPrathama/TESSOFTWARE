<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[LoginController::class,'login'])->name('login');
Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('/register',[RegisterController::class,'register_post']);
Route::post('/',[LoginController::class,'login_post']);
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
//Table Barang
Route::get('/buku',[BukuController::class,'index'])->name('buku.index');
Route::get('/barang/create',[BukuController::class,'create'])->name('buku.create');
Route::post('/barang/store',[BukuController::class,'store'])->name('buku.store');
Route::get('/barang/edit/{id}',[BukuController::class,'edit'])->name('buku.edit');
Route::put('/barang/edit/{id}',[BukuController::class,'update'])->name('buku.update');
Route::delete('/barang/delete/{id}',[BukuController::class,'destroy'])->name('buku.destroy');
