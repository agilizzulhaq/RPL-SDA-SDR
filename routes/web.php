<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoomController;
use App\Http\Controllers\WareController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NamaAlatController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PerawatanAlatController;
use App\Http\Controllers\PeminjamanAlatController;
use App\Http\Controllers\PerawatanRuanganController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\PenjadwalanRuanganController;

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
     return view('auth.login');
 });

Route::post('/ruangans', function () {
    return view('layout.ruangan');
});

Route::get('/penjadwalans/add', function () {
    return view('penjadwalan.formadd');
});

Route::get('/pemeliharaans/add', function () {
    return view('pemeliharaan.formadd');
});
// Route::get('/sda', function () {
//     return view('sda');
// });
// Route::get('/sdr', function () {
//     return view('sdr');
// });
Route::get('/dashboard-admin', function () {
    return view('dashboard-admin');
});
Route::get('/dashboard-warehouse', function () {
    return view('dashboard-warehouse');
});
Route::get('/dashboard-user', function () {
    return view('dashboard-user');
});
// Route::get('/mdusers', function () {
//     return view('mdusers');
// });
// Route::get('/mdalat', function () {
//     return view('mdalat');
// });
// Route::get('/mdlokasialat', function () {
//     return view('mdlokasialat');
// });
// Route::get('/mdruangan', function () {
//     return view('mdruangan');
// });
// Route::get('/mdlokasiruangan', function () {
//     return view('mdlokasiruangan');
// });
// Route::get('/mdvendor', function () {
//     return view('mdvendor');
// });


// Route::resource('/sdr/pemeliharaanr', PemeliharaansController::class);
// Route::resource('/sdr/penjadwalanr', PenjadwalansController::class);

Route::resource('/sda/peminjaman_alat', PeminjamanAlatController::class);
Route::resource('/sda/perawatan_alat', PerawatanAlatController::class);
Route::resource('products', ProductController::class);
Route::resource('/sda/pembelian', PembelianController::class);

// Route::get('/data-master/alat', [InventoryController::class, 'alat'])->name('alat');
Route::get('/sda/alat', [InventoryController::class, 'alat'])->name('alat');
Route::get('/tambahalat', [InventoryController::class, 'tambahalat'])->name('tambahalat');
Route::post('/masukkanalat', [InventoryController::class, 'masukkanalat'])->name('masukkanalat');
Route::get('/editalat/{id}', [InventoryController::class, 'editalat'])->name('editalat');
Route::post('/updatealat/{id}', [InventoryController::class, 'updatealat'])->name('updatealat');
Route::get('/hapusalat/{id}', [InventoryController::class, 'hapusalat'])->name('hapusalat');

// Route::get('/data-master/ruangan', [RoomController::class, 'ruangan'])->name('ruangan');
Route::get('/sdr/ruangan', [RoomController::class, 'ruangan'])->name('ruangan');
Route::get('/tambahruangan', [RoomController::class, 'tambahruangan'])->name('tambahruangan');
Route::post('/masukkanruangan', [RoomController::class, 'masukkanruangan'])->name('masukkanruangan');
Route::get('/editruangan/{id}', [RoomController::class, 'editruangan'])->name('editruangan');
Route::post('/updateruangan/{id}', [RoomController::class, 'updateruangan'])->name('updateruangan');
Route::get('/hapusruangan/{id}', [RoomController::class, 'hapusruangan'])->name('hapusruangan');

Route::resource('wares', WareController::class);

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/login-admin', 'login')->name('login');
    Route::post('/store', 'store')->name('store-admin');
    Route::get('/register-admin', 'register')->name('register');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard-admin', function () {
        return view('dashboard-admin');
    })->name('dashboard');  
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/register-user', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login-user', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard-user', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::resource('/nama_alat', NamaAlatController::class);
Route::resource('/lokasi', LokasiController::class);
Route::resource('/sdr/penjadwalanruangan', PenjadwalanRuanganController::class);
Route::resource('/sdr/perawatanruangan', PerawatanRuanganController::class);
//Route::post('/lokasi', [LokasiController::class, 'store']);

Route::get('/data-master/users', [PenggunaController::class, 'users'])->name('users');
Route::get('/addusers', [PenggunaController::class, 'addusers'])->name('addusers');
Route::post('/insertusers', [PenggunaController::class, 'insertusers'])->name('insertusers');
Route::get('/editusers/{id}', [PenggunaController::class, 'editusers'])->name('editusers');
Route::post('/updateusers/{id}', [PenggunaController::class, 'updateusers'])->name('updateusers');
Route::get('/deleteusers/{id}', [PenggunaController::class, 'deleteusers'])->name('deleteusers');

Route::get('/data-master/vendor', [VendorController::class, 'vendor'])->name('vendor');
Route::get('/addvendor', [VendorController::class, 'addvendor'])->name('addvendor');
Route::post('/insertvendor', [VendorController::class, 'insertvendor'])->name('insertvendor');
Route::get('/editvendor/{id}', [VendorController::class, 'editvendor'])->name('editvendor');
Route::post('/updatevendor/{id}', [VendorController::class, 'updatevendor'])->name('updatevendor');
Route::get('/deletevendor/{id}', [VendorController::class, 'deletevendor'])->name('deletevendor');

// Route::get('/sdr/perawatanruangan', [PerawatanRuanganController::class, 'index'])->name('dataperawatan');

// Route::get('/tambahdataperawatanruangan', [PerawatanRuanganController::class, 'create'])->name('tambahdataperawatanruangan');
// Route::post('/storedataperawatanruangan', [PerawatanRuanganController::class, 'store'])->name('storedataperawatanruangan');

// Route::get('/showdataperawatanruangan/{id}', [PerawatanRuanganController::class, 'show'])->name('showdataperawatanruangan');
// Route::post('/updatedataperawatanruangan/{id}', [PerawatanRuanganController::class, 'update'])->name('updatedataperawatanruangan');

// Route::get('/deletedataperawatanruangan/{id}', [PerawatanRuanganController::class, 'destroy'])->name('deletedataperawatanruangan');



// Route::get('/sdr/penjadwalanruangan', [PenjadwalanRuanganController::class, 'index'])->name('datapenjadwalan');

// Route::get('/tambahdatapenjadwalanruangan', [PenjadwalanRuanganController::class, 'create'])->name('tambahdatapenjadwalanruangan');
// Route::post('/storedatapenjadwalanruangan', [PenjadwalanRuanganController::class, 'store'])->name('storedatapenjadwalanruangan');

// Route::get('/showdatapenjadwalanruangan/{id}', [PenjadwalanRuanganController::class, 'show'])->name('showdatapenjadwalanruangan');
// Route::post('/updatedatapenjadwalanruangan/{id}', [PenjadwalanRuanganController::class, 'update'])->name('updatedatapenjadwalanruangan');

// Route::get('/deletedatapenjadwalanruangan/{id}', [PenjadwalanRuanganController::class, 'destroy'])->name('deletedatapenjadwalanruangan');
