<?php

use App\Http\Controllers\LayscakeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LoginController;
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


Route::get("/register", [LayscakeController::class, "register"]);
Route::get("/login", [LoginController::class, "index"]);
Route::get("/Layscake", [LayscakeController::class, "dashboard"]);

// =============== Produk ===============
Route::get("/viewProduk", [ProdukController::class, "view"]);
Route::get("/insertProduk", [ProdukController::class, "insert"]);
Route::post("/simpanProduk", [ProdukController::class, "simpan"]);
Route::get("/editProduk/{id_produk}", [ProdukController::class, "edit"]);
Route::post('/updateProduk/{id_produk}', [ProdukController::class, 'update']);
Route::get("/hapusProduk/{id_produk}", [ProdukController::class, "hapus"]);
Route::get('/cariProduk', [ProdukController::class, 'view'])->name('cari.produk');

// =============== Pelanggan ===============
Route::get("/viewPelanggan", [PelangganController::class, "view"]);
Route::get("/insertPelanggan", [PelangganController::class, "insert"]);
Route::post("/simpanPelanggan", [PelangganController::class, "simpan"]);
Route::get("/editPelanggan/{id_pelanggan}", [PelangganController::class, "edit"]);
Route::post("/updatePelanggan/{id_pelanggan}", [PelangganController::class, "update"]);
Route::get("/hapusPelanggan/{id_pelanggan}", [PelangganController::class, "hapus"]);
Route::get('/cariPelanggan', [PelangganController::class, 'view'])->name('cari.pelanggan');

// =============== Penjualan ===============
Route::get("/viewPenjualan", [PenjualanController::class, "view"]);
Route::get("/insertPenjualan", [PenjualanController::class, "insert"]);
Route::post("/simpanPenjualan", [PenjualanController::class, "simpan"]);
Route::get("/editPenjualan", [PenjualanController::class, "edit"]);
Route::get("/updatePenjualan", [PenjualanController::class, "update"]);
Route::get("/hapusPenjualan", [PenjualanController::class, "hapus"]);
Route::get('/produk/{id_produk}', [PenjualanController::class, 'getProduk']);
