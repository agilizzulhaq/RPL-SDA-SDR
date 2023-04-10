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
Route::resource('admins', AdminController::class);
Route::resource('wares', WareController::class);
Route::resource('pinjams', PinjamController::class);
Route::resource('perawatans', PerawatanController::class);
Route::resource('products', ProductController::class);

Route::get('/alat', [InventoryController::class, 'alat']) -> name('alat');
Route::get('/tambahalat', [InventoryController::class, 'tambahalat']) -> name('tambahalat');
Route::post('/masukkanalat', [InventoryController::class, 'masukkanalat']) -> name('masukkanalat');
Route::get('/editalat/{id}', [InventoryController::class, 'editalat']) -> name('editalat');
Route::post('/updatealat/{id}', [InventoryController::class, 'updatealat']) -> name('updatealat');
Route::get('/hapusalat/{id}', [InventoryController::class, 'hapusalat']) -> name('hapusalat');

Route::get('/ruangan', [RuanganController::class, 'ruangan']) -> name('ruangan');
Route::get('/tambahruangan', [RuanganController::class, 'tambahruangan']) -> name('tambahruangan');
Route::post('/masukkanruangan', [RuanganController::class, 'masukkanruangan']) -> name('masukkanruangan');
Route::get('/editruangan/{id}', [RuanganController::class, 'editruangan']) -> name('editruangan');
Route::post('/updateruangan/{id}', [RuanganController::class, 'updateruangan']) -> name('updateruangan');
Route::get('/hapusruangan/{id}', [RuanganController::class, 'hapusruangan']) -> name('hapusruangan');