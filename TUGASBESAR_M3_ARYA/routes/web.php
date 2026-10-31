<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarBarangController;


Route::get('/', [DaftarBarangController::class, 'index'])->name('inventory.index');
Route::post('/simpan', [DaftarBarangController::class, 'store'])->name('inventory.store');
Route::put('/update/{id}', [DaftarBarangController::class, 'update'])->name('inventory.update');
Route::delete('/delete/{id}', [DaftarBarangController::class, 'destroy'])->name('inventory.destroy');


