<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\DataPemakaianController;
use App\Http\Controllers\DataPembelianController;
use App\Http\Controllers\DataRuangController;
use App\Http\Controllers\GenerateLaporanController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\GenerateLaporan;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('/navbar', [Controller::class, 'navbar'])->name('navbar');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/databarang', [DataBarangController::class, 'databarang'])->name('databarang');
Route::get('/databarangadd', [DataBarangController::class, 'store'])->name('databarangadd');
Route::get('/datapemakaian', [DataPemakaianController::class, 'datapemakaian'])->name('datapemakaian');
Route::get('/datapembelian', [DataPembelianController::class, 'datapembelian'])->name('datapembelian');
Route::get('/inventaris', [InventarisController::class, 'inventaris'])->name('inventaris');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function(){
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // user
    Route::get('/data-user', [UserController::class, 'data_user'])->name('data-user');
    Route::get('/add-user', [UserController::class, 'add_user'])->name('add-user');
    Route::get('/edit-user/{id}', [UserController::class, 'edit_user'])->name('edit-user');
    Route::post('/store-user', [UserController::class, 'store_user'])->name('store-user');
    Route::put('/update-user/{id}', [UserController::class, 'update_user'])->name('update-user');
    Route::delete('/delete-user/{id}', [UserController::class, 'delete_user'])->name('delete-user');

    // pembelian
    Route::get('/data-pembelian', [DataPembelianController::class, 'data_pembelian'])->name('data-pembelian');
    Route::get('/add-pembelian', [DataPembelianController::class, 'add_pembelian'])->name('add-pembelian');
    Route::get('/edit-data-pembelian/{kode_pembelian}', [DataPembelianController::class, 'edit_data_pembelian'])->name('edit-data-pembelian');
    Route::post('/store-pembelian', [DataPembelianController::class, 'store_pembelian'])->name('store-pembelian');
    Route::put('/update-data-pembelian/{kode_pembelian}', [DataPembelianController::class, 'update_data_pembelian'])->name('update-data-pembelian');
    Route::delete('/delete-data-pembelian/{kode_pembelian}', [DataPembelianController::class, 'delete_data_pembelian'])->name('delete-data-pembelian');


    // barang
    Route::get('/data-barang', [DataBarangController::class, 'data_barang'])->name('data-barang');
    Route::delete('/delete-data-barang/{kode_barang}', [DataBarangController::class, 'delete_data_barang'])->name('delete-data-barang');

    // ruang
    Route::get('/data-ruang', [DataRuangController::class, 'data_ruang'])->name('data-ruang');
    Route::get('/add-ruang', [DataRuangController::class, 'add_ruang'])->name('add-ruang');
    Route::get('/edit-ruang/{id}', [DataRuangController::class, 'edit_ruang'])->name('edit-ruang');
    Route::post('/store-ruang', [DataRuangController::class, 'store_ruang'])->name('store-ruang');
    Route::put('/update-ruang/{id}', [DataRuangController::class, 'update_ruang'])->name('update-ruang');
    Route::delete('/delete-ruang/{id}', [DataRuangController::class, 'delete_ruang'])->name('delete-ruang');

    // pemakaian
    Route::get('/data-pemakaian', [DataPemakaianController::class, 'data_pemakaian'])->name('data-pemakaian');
    Route::get('/add-pemakaian', [DataPemakaianController::class, 'add_pemakaian'])->name('add-pemakaian');
    Route::get('/edit-pemakaian/{id}', [DataPemakaianController::class, 'edit_pemakaian'])->name('edit-pemakaian');
    Route::post('/store-pemakaian', [DataPemakaianController::class, 'store_pemakaian'])->name('store-pemakaian');
    Route::put('/update-pemakaian/{id}', [DataPemakaianController::class, 'update_pemakaian'])->name('update-pemakaian');
    Route::delete('/delete-pemakaian/{id}', [DataPemakaianController::class, 'delete_pemakaian'])->name('delete-pemakaian');

        // laporan
        Route::get('/add-laporan', [GenerateLaporanController::class, 'add_laporan'])->name('add-laporan');
        Route::get('/edit-laporan/{id}', [GenerateLaporanController::class, 'edit_laporan'])->name('edit-laporan');
        Route::post('/store-laporan', [GenerateLaporanController::class, 'store_laporan'])->name('store-laporan');
        Route::put('/update-laporan/{id}', [GenerateLaporanController::class, 'update_laporan'])->name('update-laporan');
        Route::delete('/delete-laporan/{id}', [GenerateLaporanController::class, 'delete_laporan'])->name('delete-laporan');

        Route::get('report/export/', [GenerateLaporanController::class, 'export'])->name('export');

});



require __DIR__.'/auth.php';
