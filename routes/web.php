<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\NamaAlatController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\MahasiswaAgilController;
use App\Http\Controllers\PerawatanAlatController;
use App\Http\Controllers\PeminjamanAlatController;
use App\Http\Controllers\PerawatanRuanganController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CrudRasikhController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiReginaController;
use App\Http\Controllers\MatkulReginaController;
use App\Http\Controllers\TempatLahirReginaController;
use App\Http\Controllers\AlamatReginaController;
use App\Http\Controllers\MahasiswaReginaController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\LoginControler;
use App\Http\Controllers\PenjadwalanRuanganController;
use App\Http\Controllers\adminControler;
use App\Http\Controllers\wareControler;
use App\Http\Controllers\userControler;
use App\Http\Middleware\CekUserLogin;

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


// Route::get('/rpl', function () {
//     return view('rpl');
// });

// Route::get('/', function () {
//      return view('auth.login')->name('login');
//  });

// Route::post('/ruangans', function () {
//     return view('layout.ruangan');
// });

// Route::get('/penjadwalans/add', function () {
//     return view('penjadwalan.formadd');
// });

// Route::get('/pemeliharaans/add', function () {
//     return view('pemeliharaan.formadd');
// });


Route::resource('/sda/peminjaman_alat', PeminjamanAlatController::class);
Route::resource('/sda/perawatan_alat', PerawatanAlatController::class);
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


// Route::get('/', [LoginController::class, 'index'])->name('login');

// Route::resource('/nama_alat', NamaAlatController::class)->middleware('admin');
// Route::resource('/lokasi', LokasiController::class)->middleware('admin');
// Route::resource('/sdr/penjadwalanruangan', PenjadwalanRuanganController::class);
// Route::resource('/sdr/perawatanruangan', PerawatanRuanganController::class);
// //Route::post('/lokasi', [LokasiController::class, 'store']);

// Route::get('/data-master/users', [PenggunaController::class, 'users'])->name('users')->middleware('admin');
// Route::get('/addusers', [PenggunaController::class, 'addusers'])->name('addusers');
// Route::post('/insertusers', [PenggunaController::class, 'insertusers'])->name('insertusers');
// Route::get('/editusers/{id}', [PenggunaController::class, 'editusers'])->name('editusers');
// Route::post('/updateusers/{id}', [PenggunaController::class, 'updateusers'])->name('updateusers');
// Route::get('/deleteusers/{id}', [PenggunaController::class, 'deleteusers'])->name('deleteusers');

// Route::get('/data-master/vendor', [VendorController::class, 'vendor'])->name('vendor')->middleware('admin');
// Route::get('/addvendor', [VendorController::class, 'addvendor'])->name('addvendor');
// Route::post('/insertvendor', [VendorController::class, 'insertvendor'])->name('insertvendor');
// Route::get('/editvendor/{id}', [VendorController::class, 'editvendor'])->name('editvendor');
// Route::post('/updatevendor/{id}', [VendorController::class, 'updatevendor'])->name('updatevendor');
// Route::get('/deletevendor/{id}', [VendorController::class, 'deletevendor'])->name('deletevendor');

// Login Google
Route::controller(GoogleController::class)->group(function () {
    Route::get('/auth/google', 'redirect')->name('google-auth');
    Route::get('/auth/google/call-back', 'callbackGoogle');
});

// Route Rasikh
Route::resource('crudrasikhs', CrudRasikhController::class);
// Route Regina
Route::resource('/prodiregina', ProdiReginaController::class);
Route::resource('/matkulregina', MatkulReginaController::class);
Route::resource('/tempatlahirregina', TempatLahirReginaController::class);
Route::resource('/alamatregina', AlamatReginaController::class);
Route::resource('/mahasiswaregina', MahasiswaReginaController::class);

Route::get('/mahasiswa_alyzar/add', function () {
    return view('students.formadd');
});
Route::resource('mahasiswa_alyzar', StudentsController::class);
// Route Agil
Route::prefix('mahasiswa-agil')->group(function () {
    Route::get('/', [MahasiswaAgilController::class, 'index']);
    Route::get('/create', [MahasiswaAgilController::class, 'create']);
    Route::post('/store', [MahasiswaAgilController::class, 'store']);
    Route::get('/edit/{IDMahasiswa}', [MahasiswaAgilController::class, 'edit']);
    Route::put('/{IDMahasiswa}', [MahasiswaAgilController::class, 'update']);
    Route::delete('delete/{IDMahasiswa}', [MahasiswaAgilController::class, 'destroy']);
});
// Route Arjuna
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('datamahasiswa');
Route::get('/tambahdatamahasiswa', [MahasiswaController::class, 'create'])->name('tambahdataMahasiswa');
Route::post('/storedatamahasiswa', [MahasiswaController::class, 'store'])->name('storedatamahasiswa');

Route::get('/showdatamahasiswa/{id}', [MahasiswaController::class, 'show'])->name('showdatamahasiswa');
Route::post('/updatedatamahasiswa/{id}', [MahasiswaController::class, 'update'])->name('updatedatamahasiswa');

Route::get('/deletedatamahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('deletedatamahasiswa');


Route::middleware('auth')->name('dashboard')->get('/', [DashboardController::class, 'index']);
Route::middleware('auth')->name('dashboard')->get('/home', [DashboardController::class, 'index']);
Route::middleware('auth')->name('dashboard')->get('/dashboard', [DashboardController::class, 'index']);

Route::controller(LoginControler::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses')->name('login/proses');
    Route::match(['get', 'post'], '/logout', 'logout');
    // Route::get('/', 'index')->name('login');
});

Route::resource('/sdr/penjadwalanruangan', PenjadwalanRuanganController::class);
Route::resource('/sdr/perawatanruangan', PerawatanRuanganController::class);

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('/nama_alat', NamaAlatController::class)->middleware('admin');
        Route::resource('/lokasi', LokasiController::class)->middleware('admin');

        Route::get('/data-master/users', [PenggunaController::class, 'users'])->name('users')->middleware('admin');
        Route::get('/addusers', [PenggunaController::class, 'addusers'])->name('addusers');
        Route::post('/insertusers', [PenggunaController::class, 'insertusers'])->name('insertusers');
        Route::get('/editusers/{id}', [PenggunaController::class, 'editusers'])->name('editusers');
        Route::post('/updateusers/{id}', [PenggunaController::class, 'updateusers'])->name('updateusers');
        Route::get('/deleteusers/{id}', [PenggunaController::class, 'deleteusers'])->name('deleteusers');

        Route::get('/data-master/vendor', [VendorController::class, 'vendor'])->name('vendor')->middleware('admin');
        Route::get('/addvendor', [VendorController::class, 'addvendor'])->name('addvendor');
        Route::post('/insertvendor', [VendorController::class, 'insertvendor'])->name('insertvendor');
        Route::get('/editvendor/{id}', [VendorController::class, 'editvendor'])->name('editvendor');
        Route::post('/updatevendor/{id}', [VendorController::class, 'updatevendor'])->name('updatevendor');
        Route::get('/deletevendor/{id}', [VendorController::class, 'deletevendor'])->name('deletevendor');
    });
    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('ware', wareControler::class);
    });
    Route::group(['middleware' => ['cekUserLogin:3']], function () {
        Route::resource('user', userControler::class);
    });
});
