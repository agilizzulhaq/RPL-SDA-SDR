<?php

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
Route::get('/rpl', function () {
    return view('rpl');
});

Route::get('/', function () {
    return view('layout.ruangan');
});

Route::get('/ruangans', function () {
    return view('layout.ruangan');
});

Route::get('/penjadwalans/add', function () {
    return view('penjadwalan.formadd');
});

Route::get('/pemeliharaans/add', function () {
    return view('pemeliharaan.formadd');
});

Route::resource('pemeliharaans', PemeliharaansController::class);
Route::resource('penjadwalans', PenjadwalansController::class);
Route::resource('ruangans', RuangansController::class);
