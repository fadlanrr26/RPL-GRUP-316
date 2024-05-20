<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/thumbnail', function () {
    return view('thumbnail');
})->name('thumbnail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware('role:guru')->group(function () {
        Route::get('input-nilai', [GuruController::class, 'inputNilai'])->name('inputNilai');
        Route::post('input-nilai', [GuruController::class, 'storeNilai'])->name('storeNilai');

        Route::get('input-materi', [GuruController::class, 'inputMateri'])->name('inputMateri');
        Route::post('input-materi', [GuruController::class, 'storeMateri'])->name('storeMateri');
        Route::patch('input-materi/{id}', [GuruController::class, 'updateMateri'])->name('updateMateri');
        Route::delete('input-materi/{id}', [GuruController::class, 'deleteMateri'])->name('deleteMateri');

        Route::get('input-tugas', [GuruController::class, 'inputTugas'])->name('inputTugas');
        Route::post('input-tugas', [GuruController::class, 'storeTugas'])->name('storeTugas');
        Route::patch('input-tugas/{id}', [GuruController::class, 'updateTugas'])->name('updateTugas');
        Route::delete('input-tugas/{id}', [GuruController::class, 'deleteTugas'])->name('deleteTugas');
        
        Route::get('jadwal-konsultasi', [GuruController::class, 'jadwalKonsultasi'])->name('jadwalKonsultasi');
        Route::get('feedback-konsultasi', [GuruController::class, 'feedbackKonsultasi'])->name('feedbackKonsultasi');
        Route::get('ekstrakurikuler', [GuruController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
        Route::get('administrasi', [GuruController::class, 'administrasi'])->name('administrasi');
    });
});

require __DIR__.'/auth.php';
