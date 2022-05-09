<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasController;

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

Route::get('/', [KasController::class, 'index']);
Route::get('/create', [KasController::class, 'create']);
Route::post('/store', [KasController::class, 'store']);
Route::get('/show/{id}', [KasController::class, 'show']);
Route::post('/update/{id}', [KasController::class, 'update']);
Route::get('/destroy/{id}', [KasController::class, 'destroy']);

// Route Karyawan








// Route Pengeluaran








// Route Laptop
