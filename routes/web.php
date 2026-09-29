<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes - SMKNK 1 CIOMAS
|--------------------------------------------------------------------------
*/

// Website Publik & Portal PPDB
Route::get('/', [PpdbController::class, 'index'])->name('home');
Route::post('/ppdb/daftar', [PpdbController::class, 'store'])->name('ppdb.store');

// Halaman Dashboard Admin PPDB SMKNK 1 CIOMAS
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard.index');
    Route::get('/pendaftar', [AdminController::class, 'pendaftar'])->name('pendaftar');
    Route::post('/pendaftar/{id}/status', [AdminController::class, 'updateStatus'])->name('pendaftar.status');
    Route::delete('/pendaftar/{id}', [AdminController::class, 'destroy'])->name('pendaftar.destroy');
    Route::get('/pendaftar/export', [AdminController::class, 'exportCsv'])->name('pendaftar.export');
    Route::get('/api/live-stats', [AdminController::class, 'liveStats'])->name('live.stats');
});
