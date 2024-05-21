<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CriteriaController;
use App\Http\Controllers\Admin\SantriController;
use App\Http\Controllers\Admin\NormalisasiController;

Route::get('/', function () {
    return view('pages.home');
});

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

    Route::get('nilai-normalisasi', [NormalisasiController::class, 'index'])->name('admin.normalisasi.index');
});
