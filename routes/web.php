<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\SuperadminController;

Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->hasRole('superadmin')) {
            return redirect('superadmin');
        } elseif (Auth::user()->hasRole('pemohon')) {
            return redirect('pemohon');
        }
    }
    return redirect('/login');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('/logout', [LogoutController::class, 'logout']);
Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/daftar', [DaftarController::class, 'store']);

Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('pendaftar', [PendaftarController::class, 'index']);
    Route::get('pendaftar/datanilai', [PendaftarController::class, 'datanilai']);
    Route::get('pendaftar/editprofil', [PendaftarController::class, 'profil']);
    Route::post('pendaftar/editprofil', [PendaftarController::class, 'updateProfil']);
});
Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('superadmin', [HomeController::class, 'superadmin']);
    Route::get('superadmin/pendaftar', [SuperadminController::class, 'pendaftar']);
    Route::get('superadmin/pendaftar/pdf', [SuperadminController::class, 'pendaftarPDF']);
    Route::get('superadmin/pendaftar/delete/{id}', [SuperadminController::class, 'hapusPendaftar']);
    Route::get('superadmin/pendaftar/detail/{id}', [SuperadminController::class, 'detailPendaftar']);
    Route::post('superadmin/pendaftar/detail/{id}', [SuperadminController::class, 'validasi']);
    Route::get('superadmin/laporanpendaftar', [SuperadminController::class, 'laporanpendaftar']);
    Route::get('superadmin/laporan/tt/d3', [SuperadminController::class, 'tt_d3']);
    Route::get('superadmin/laporan/tt/s1', [SuperadminController::class, 'tt_s1']);
    Route::get('superadmin/laporan/tk/d3', [SuperadminController::class, 'tk_d3']);
    Route::get('superadmin/laporan/tk/s1', [SuperadminController::class, 'tk_s1']);
});
