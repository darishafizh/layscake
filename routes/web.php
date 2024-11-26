<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayscakeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

Route::group(['prefix' => 'dashboard'], function () {
    Route::get("/", [DashboardController::class, "index"])->name('dashboard.index');
});


Route::group(['prefix' => 'product'], function () {
    Route::get("/", [ProductController::class, "index"])->name('product.index');
});

Route::group(['prefix' => 'pelanggan'], function () {
    Route::get("/", [PelangganController::class, "index"])->name('pelanggan.index');
});

Route::group(['prefix' => 'penjualan'], function () {
    Route::get("/", [PenjualanController::class, "index"])->name('penjualan.index');
});
