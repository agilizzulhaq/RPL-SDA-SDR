<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaAgilController;

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

Route::redirect('/', '/mahasiswa-agil');

Route::prefix('mahasiswa-agil')->group(function () {
    Route::get('/', [MahasiswaAgilController::class, 'index']);
    Route::get('/create', [MahasiswaAgilController::class, 'create']);
    Route::post('/store', [MahasiswaAgilController::class, 'store']);
    Route::get('/edit/{IDMahasiswa}', [MahasiswaAgilController::class, 'edit']);
    Route::put('/{IDMahasiswa}', [MahasiswaAgilController::class, 'update']);
    Route::delete('delete/{IDMahasiswa}', [MahasiswaAgilController::class, 'destroy']);
});
