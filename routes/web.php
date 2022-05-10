<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LaptopController;
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

// Route Kas

Route::get('/kas', [KasController::class, 'index']);
Route::get('/create', [KasController::class, 'create']);
Route::post('/store', [KasController::class, 'store']);
Route::get('/show/{id}', [KasController::class, 'show']);
Route::post('/update/{id}', [KasController::class, 'update']);
Route::get('/destroy/{id}', [KasController::class, 'destroy']);

// Route Karyawan

Route::get('/karyawan', [KaryawanController::class, 'index2']);
Route::get('/create2', [KaryawanController::class, 'create2']);
Route::post('/store2', [KaryawanController::class, 'store2']);
Route::get('/show2/{id}', [KaryawanController::class, 'show2']);
Route::post('/update2/{id}', [KaryawanController::class, 'update2']);
Route::get('/destroy2/{id}', [KaryawanController::class, 'destroy2']);

// Route Pengeluaran

Route::get('/pengeluaran', [PengeluaranController::class, 'index1']);
Route::get('/create1', [PengeluaranController::class, 'create1']);
Route::post('/store1', [PengeluaranController::class, 'store1']);
Route::get('/show1/{id}', [PengeluaranController::class, 'show1']);
Route::post('/update1/{id}', [PengeluaranController::class, 'update1']);
Route::get('/destroy1/{id}', [PengeluaranController::class, 'destroy1']);

// Route Laptop

Route::get('/laptop', [LaptopController::class, 'index3']);
Route::get('/create3', [LaptopController::class, 'create3']);
Route::post('/store3', [LaptopController::class, 'store3']);
Route::get('/show3/{id}', [LaptopController::class, 'show3']);
Route::post('/update3/{id}', [LaptopController::class, 'update3']);
Route::get('/destroy3/{id}', [LaptopController::class, 'destroy3']);