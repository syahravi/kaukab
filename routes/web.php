<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CriteriaController;
use App\Http\Controllers\Admin\NilaiAkhirController;
use App\Http\Controllers\Admin\SantriController;
use App\Http\Controllers\Admin\NormalisasiController;
use App\Http\Controllers\Pages\SantriController as PagesSantriController;
use App\Http\Controllers\Pages\KriteriaController;
use App\Http\Controllers\Pages\PenilaianController;
Route::get('/', function () {

    return view('pages.home');
});

Route::get('admin/nilai-akhir/download-pdf', [NilaiAkhirController::class, 'downloadPDF'])->name('admin.nilai-akhir.downloadPDF');
// Define the index route for SantriController
Route::get('santri', [PagesSantriController::class, 'index'])->name('santri');
// Define the index route for SantriController
Route::get('kriteria', [KriteriaController::class, 'index'])->name('kriteria');
Route::get('penilian', [PenilaianController::class, 'index'])->name('penilian');
Route::get('/penilaian/{nama_santri}/download', [PenilaianController::class, 'download'])->name('penilaian.download');
Route::get('/penilaian/{nama_santri}', [PenilaianController::class, 'show'])->name('penilaian.show');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

    // Routes for CriteriaController
    Route::get('criteria', [CriteriaController::class, 'index'])->name('admin.criteria.index');
    Route::get('criteria/create', [CriteriaController::class, 'create'])->name('admin.criteria.create');
    Route::post('criteria', [CriteriaController::class, 'store'])->name('admin.criteria.store');
    Route::get('criteria/{criteria}/edit', [CriteriaController::class, 'edit'])->name('admin.criteria.edit');
    Route::put('criteria/{criteria}', [CriteriaController::class, 'update'])->name('admin.criteria.update');
    Route::delete('criteria/{criteria}', [CriteriaController::class, 'destroy'])->name('admin.criteria.destroy');

    // Routes for SantriController
    Route::get('santri', [SantriController::class, 'index'])->name('admin.santri.index');
    Route::get('santri/create', [SantriController::class, 'create'])->name('admin.santri.create');
    Route::post('santri', [SantriController::class, 'store'])->name('admin.santri.store');
    Route::get('santri/{id}/edit', [SantriController::class, 'edit'])->name('admin.santri.edit');
    Route::put('santri/{id}', [SantriController::class, 'update'])->name('admin.santri.update');
    Route::delete('santri/{id}', [SantriController::class, 'destroy'])->name('admin.santri.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('normalisasi', [NormalisasiController::class, 'index'])->name('normalisasi.index');
        Route::get('normalisasi/create', [NormalisasiController::class, 'create'])->name('normalisasi.create');
        Route::post('normalisasi', [NormalisasiController::class, 'store'])->name('normalisasi.store');
        Route::get('normalisasi/edit/{id}', [NormalisasiController::class, 'edit'])->name('normalisasi.edit');
        Route::put('normalisasi/update/{id}', [NormalisasiController::class, 'update'])->name('normalisasi.update');
        Route::delete('normalisasi/destroy/{id}', [NormalisasiController::class, 'destroy'])->name('normalisasi.destroy');
        Route::post('normalisasi/save-nilai-akhir', [NormalisasiController::class, 'saveNilaiAkhir'])->name('normalisasi.saveNilaiAkhir');
    });
    
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('nilai-akhir', [NilaiAkhirController::class, 'index'])->name('nilai-akhir.index');
        Route::delete('nilai-akhir/{id}', [NilaiAkhirController::class, 'destroy'])->name('nilai-akhir.destroy');
         
    });
     
    
});
