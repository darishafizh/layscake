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
    Route::get("data-ajax", [ProductController::class, "data_ajax"])->name('product.data_ajax');
    Route::get("create", [ProductController::class, "create"])->name('product.create');
    Route::post("store", [ProductController::class, "store"])->name('product.store');
});

Route::group(['prefix' => 'pelanggan'], function () {
    Route::get("/", [PelangganController::class, "index"])->name('pelanggan.index');
    Route::get("data-ajax", [PelangganController::class, "data_ajax"])->name('pelanggan.data_ajax');
    Route::get("create", [PelangganController::class, "create"])->name('pelanggan.create');
    Route::get("store", [PelangganController::class, "store"])->name('pelanggan.store');
});

Route::group(['prefix' => 'penjualan'], function () {
    Route::get("/", [PenjualanController::class, "index"])->name('penjualan.index');
    Route::get("data-ajax", [PenjualanController::class, "data_ajax"])->name('penjualan.data_ajax');
});
