<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
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

// bikin routing ke dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// bikin routing ke produk
Route::get('/produk', [ProdukController::class, 'index']);

// bikin routing frontend
Route::get('/frontend', [FrontendController::class, 'index']);