<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotController;

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
Route::get('/spot', [SpotController::class, 'index']);
Route::get('/spot/tambah', [SpotController::class, 'create']);
Route::post('/spot/store', [SpotController::class, 'store']);
Route::get('/spot/edit/{id}', [SpotController::class, 'edit']);
Route::put('/spot/update/{id}', [SpotController::class, 'update']);
Route::get('/spot/hapus/{id}', [SpotController::class, 'delete']);
Route::get('/spot/destroy/{id}', [SpotController::class, 'destroy']);
Route::get('/spot/cetak', [SpotController::class, 'cetak']);
Route::get('/dashboard', [DashboardController::class, 'index']);