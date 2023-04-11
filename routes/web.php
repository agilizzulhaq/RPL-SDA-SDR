<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoomController;
use App\Http\Controllers\WareController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RuangansController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PerawatanController;
use App\Http\Controllers\PenjadwalansController;
use App\Http\Controllers\PemeliharaansController;

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


Route::get('/rpl', function () {
    return view('rpl');
});

Route::get('/', function () {
    return view('rpl');
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
Route::get('/sda', function () {
    return view('sda');
});
Route::get('/sdr', function () {
    return view('sdr');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('pemeliharaans', PemeliharaansController::class);
Route::resource('penjadwalans', PenjadwalansController::class);
Route::resource('ruangans', RuangansController::class);
Route::resource('admins', AdminController::class);
Route::resource('wares', WareController::class);
Route::resource('/sda/pinjams', PinjamController::class);
Route::resource('/sda/perawatans', PerawatanController::class);
Route::resource('products', ProductController::class);
Route::resource('/sda/pembelian', PembelianController::class);

Route::get('/alat', [InventoryController::class, 'alat']) -> name('alat');
Route::get('/tambahalat', [InventoryController::class, 'tambahalat']) -> name('tambahalat');
Route::post('/masukkanalat', [InventoryController::class, 'masukkanalat']) -> name('masukkanalat');
Route::get('/editalat/{id}', [InventoryController::class, 'editalat']) -> name('editalat');
Route::post('/updatealat/{id}', [InventoryController::class, 'updatealat']) -> name('updatealat');
Route::get('/hapusalat/{id}', [InventoryController::class, 'hapusalat']) -> name('hapusalat');

Route::get('/ruangan', [RoomController::class, 'ruangan']) -> name('ruangan');
Route::get('/tambahruangan', [RoomController::class, 'tambahruangan']) -> name('tambahruangan');
Route::post('/masukkanruangan', [RoomController::class, 'masukkanruangan']) -> name('masukkanruangan');
Route::get('/editruangan/{id}', [RoomController::class, 'editruangan']) -> name('editruangan');
Route::post('/updateruangan/{id}', [RoomController::class, 'updateruangan']) -> name('updateruangan');
Route::get('/hapusruangan/{id}', [RoomController::class, 'hapusruangan']) -> name('hapusruangan');
