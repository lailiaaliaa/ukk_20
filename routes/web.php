<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PengaduanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
return view('login');
});
Route::post('/loginproses', [UserController::class, 'loginproses'])->name('loginproses');
Route::get('/administrator', [UserController::class, 'registeradmin'])->name('registeradmin');
Route::get('/masyarakat', [UserController::class, 'registermasyarakat'])->name('registermasyarakat');
Route::post('/simpanadmin', [UserController::class, 'simpanadmin'])->name('simpanadmin');
Route::post('/simpanmasyarakat', [UserController::class, 'simpanmasyarakat'])->name('simpanmasyarakat');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/pdf', [UserController::class, 'exportPDF']);


Route::group(['middleware' => ['auth', 'level:admin']], function () {

    Route::get('/indexadmin',[UserController::class,'indexadmin'])->name('indexadmin');
    Route::get('/daftar_pengaduan_admin',[PengaduanController::class,'daftar_pengaduan_admin'])->name('daftar_pengaduan_admin');
    Route::get('/pengaduan1/{status}/{id}', [PengaduanController::class, 'updatestatusa'])->middleware('auth');
    Route::get('/tanggapan_admin', [PengaduanController::class, 'tanggapan_admin'])->name('tanggapan_admin');
});
Route::group(['middleware' => ['auth','level:petugas']], function() {

    Route::get('/indexpetugas',[UserController::class,'indexpetugas'])->name('indexpetugas');
    Route::get('/daftar_pengaduan_petugas',[PengaduanController::class,'daftar_pengaduan_petugas'])->name('daftar_pengaduan_petugas');
    Route::get('/pengaduan/{status}/{id}', [PengaduanController::class, 'updatestatus'])->middleware('auth');
    Route::get('/tanggapan', [PengaduanController::class, 'tanggapan'])->name('tanggapan');

});
Route::group(['middleware' => ['auth','level:masyarakat']], function() {

    Route::get('/indexmasyarakat',[UserController::class,'indexmasyarakat'])->name('indexmasyarakat');
    Route::get('/pengaduan', function () { return view('masyarakat.pengaduan'); });
    Route::get('/daftar_pengaduan',[PengaduanController::class,'daftar_pengaduan'])->name('daftar_pengaduan');
    Route::get('/daftar_tanggapan',[PengaduanController::class,'daftar_tanggapan'])->name('daftar_tanggapan');
    Route::post('/insert_pengaduan', [PengaduanController::class, 'insertpengaduan'])->name('insertpengaduan');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/changePassword', [PengaduanController::class, 'showChangePasswordGet'])->name('changePasswordGet');
        Route::post('/changePassword', [PengaduanController::class, 'changePasswordPost'])->name('changePasswordPost');
    });

});
