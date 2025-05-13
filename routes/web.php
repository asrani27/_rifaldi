<?php

use App\Models\Deviasi;
use App\Models\Dataumum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IkpaController;
use App\Http\Controllers\SkpdController;
use App\Http\Controllers\TkskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\PanganController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RevisiController;
use App\Http\Controllers\DeviasiController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RencanaController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\DataumumController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KomponenController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DistribusiController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KodefikasiController;
use App\Http\Controllers\LaporKerjaController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PembiayaanController;
use App\Http\Controllers\PenyerapanController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\AdminRevisiController;
use App\Http\Controllers\AdminDeviasiController;
use App\Http\Controllers\PemeliharaanController;
use App\Http\Controllers\AdminPenyerapanController;

Route::get('/', [LoginController::class, 'welcome']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::get('/superadmin', [HomeController::class, 'superadmin']);
    Route::get('/superadmin/laporan', [LaporanController::class, 'index']);

    Route::get('/superadmin/laporan/bulan', [LaporanController::class, 'bulan']);

    Route::get('/superadmin/jenis', [JenisController::class, 'index']);
    Route::get('/superadmin/jenis/add', [JenisController::class, 'add']);
    Route::get('/superadmin/jenis/edit/{id}', [JenisController::class, 'edit']);
    Route::get('/superadmin/jenis/delete/{id}', [JenisController::class, 'delete']);
    Route::post('/superadmin/jenis/add', [JenisController::class, 'store']);
    Route::post('/superadmin/jenis/edit/{id}', [JenisController::class, 'update']);

    Route::get('/superadmin/perusahaan', [PerusahaanController::class, 'index']);
    Route::get('/superadmin/perusahaan/add', [perusahaanController::class, 'add']);
    Route::get('/superadmin/perusahaan/edit/{id}', [PerusahaanController::class, 'edit']);
    Route::get('/superadmin/perusahaan/delete/{id}', [PerusahaanController::class, 'delete']);
    Route::post('/superadmin/perusahaan/add', [PerusahaanController::class, 'store']);
    Route::post('/superadmin/perusahaan/edit/{id}', [PerusahaanController::class, 'update']);

    Route::get('/superadmin/karyawan', [KaryawanController::class, 'index']);
    Route::get('/superadmin/karyawan/add', [KaryawanController::class, 'add']);
    Route::get('/superadmin/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
    Route::get('/superadmin/karyawan/delete/{id}', [KaryawanController::class, 'delete']);
    Route::post('/superadmin/karyawan/add', [KaryawanController::class, 'store']);
    Route::post('/superadmin/karyawan/edit/{id}', [KaryawanController::class, 'update']);

    Route::get('/superadmin/kodefikasi', [KodefikasiController::class, 'index']);
    Route::get('/superadmin/kodefikasi/add', [KodefikasiController::class, 'add']);
    Route::get('/superadmin/kodefikasi/edit/{id}', [KodefikasiController::class, 'edit']);
    Route::get('/superadmin/kodefikasi/delete/{id}', [KodefikasiController::class, 'delete']);
    Route::post('/superadmin/kodefikasi/add', [KodefikasiController::class, 'store']);
    Route::post('/superadmin/kodefikasi/edit/{id}', [KodefikasiController::class, 'update']);

    Route::get('/superadmin/laporkerja', [LaporKerjaController::class, 'index']);
    Route::get('/superadmin/laporkerja/add', [LaporKerjaController::class, 'add']);
    Route::get('/superadmin/laporkerja/edit/{id}', [LaporKerjaController::class, 'edit']);
    Route::get('/superadmin/laporkerja/delete/{id}', [LaporKerjaController::class, 'delete']);
    Route::post('/superadmin/laporkerja/add', [LaporKerjaController::class, 'store']);
    Route::post('/superadmin/laporkerja/edit/{id}', [LaporKerjaController::class, 'update']);

    Route::get('/laporan/pilih', [LaporanController::class, 'pilih']);
    Route::get('/laporan/klien/print', [LaporanController::class, 'pdfklien']);
    Route::get('/laporan/dokumen/print', [LaporanController::class, 'pdfdokumen']);
    Route::get('/laporan/evaluasi/print', [LaporanController::class, 'pdfevaluasi']);
    Route::get('/laporan/verifikasi/print', [LaporanController::class, 'pdfverifikasi']);
    Route::get('/laporan/dokumen', [LaporanController::class, 'dokumen']);
    Route::get('/laporan/verifikasi', [LaporanController::class, 'verifikasi']);
    Route::get('/laporan/evaluasi', [LaporanController::class, 'evaluasi']);
});
Route::get('/logout', function () {
    Auth::logout();
    Session::flash('success', 'Anda Telah Logout');
    return redirect('/');
});
