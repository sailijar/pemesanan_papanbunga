<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DetailpesananController;
use App\Http\Controllers\ProdukController;


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
    return view('home');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




// route pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
Route::get('/pelanggan/create', [PelangganController::class, 'create']);
Route::post('/pelanggan', [PelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit']);
Route::put('/pelanggan/{id}', [PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy']);
// end route pelanggan


// route produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk', [ProdukController::class, 'store']);
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::put('/produk/{id}', [ProdukController::class, 'update']);
Route::delete('/produk/{id}', [ProdukController::class, 'destroy']);
// end route produk

// route pesanan
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');
Route::get('/pesanan/create', [PesananController::class, 'create']);
Route::post('/pesanan', [PesananController::class, 'store']);
Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
Route::put('/pesanan/{id}', [PesananController::class, 'update']);
Route::delete('/pesanan/{id}', [PesananController::class, 'destroy']);
// end route pesanan

// route detail pesanan
Route::get('/detail_pesanan', [DetailpesananController::class, 'index'])->name('detail_pesanan');
Route::get('/detail_pesanan/create', [DetailpesananController::class, 'create']);
Route::post('/detail_pesanan', [DetailpesananController::class, 'store']);
Route::get('/detail_pesanan/edit/{id}', [DetailpesananController::class, 'edit']);
Route::put('/detail_pesanan/{id}', [DetailpesananController::class, 'update']);
Route::delete('/detail_pesanan/{id}', [DetailpesananController::class, 'destroy']);
// route end detail pesanan




// Route::get('/cektemplate', function(){
//     return view('layouts.template');
// });

// Route::get('/dashboard', function(){
//     return view('layouts.dashboard.index');
// });

// Route::get('/pelanggan', function(){
//     return view('layouts.pelanggan.index');
// });

// Route::get('/produk', function(){
//     return view('layouts.produk.index');
// });

// Route::get('/pesanan', function(){
//     return view('layouts.pesanan.index');
// });

// Route::get('/detailpesanan', function(){
//     return view('layouts.detail_pesanan.index');
// });













