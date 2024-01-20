<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\VinoController;
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
Route::get('/bodegas', [BodegaController::class, 'index'])->name('bodegas.index');
Route::get('/bodegas/create', [BodegaController::class, 'create'])->name('bodegas.create');
Route::post('/bodegas/store', [BodegaController::class, 'store'])->name('bodegas.store');
Route::get('/bodegas/{bodega}', [BodegaController::class, 'show'])->name('bodegas.show');
Route::get('/bodegas/{bodega}/edit', [BodegaController::class, 'edit'])->name('bodegas.edit');
Route::put('/bodegas/{bodega}/update', [BodegaController::class, 'update'])->name('bodegas.update');
Route::delete('/bodegas/{bodega}/delete', [BodegaController::class, 'destroy'])->name('bodegas.destroy');

Route::get('/vinos', [VinoController::class, 'index'])->name('vinos.index');
Route::get('/vinos/create/{bodega}', [VinoController::class, 'create'])->name('vinos.create');
Route::post('/vinos/store', [VinoController::class, 'store'])->name('vinos.store');
Route::get('/vinos/{vino}', [VinoController::class, 'show'])->name('vinos.show');
Route::get('/vinos/{vino}/edit', [VinoController::class, 'edit'])->name('vinos.edit');
Route::put('/vinos/{vino}/update', [VinoController::class, 'update'])->name('vinos.update');
Route::delete('/vinos/{vino}/delete', [VinoController::class, 'destroy'])->name('vinos.destroy');
