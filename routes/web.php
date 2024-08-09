<?php

use App\Http\Controllers\AbsensiAPIController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;




Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->name('authenticate');



Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index')->middleware('auth');
Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.store')->middleware('auth');