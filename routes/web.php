<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemakaianController;
use App\Http\Controllers\PembelianController;
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

Route::resource('/barang', BarangController::class);
Route::resource('/pemakaian', PemakaianController::class);
Route::resource('/pembelian', PembelianController::class);
