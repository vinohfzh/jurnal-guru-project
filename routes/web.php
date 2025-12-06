<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurnalController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::get('/guru/jurnal', [JurnalController::class, 'index'])->name('guru.jurnal.index');
    Route::get('/guru/jurnal/create', [JurnalController::class, 'create'])->name('guru.jurnal.create');
    Route::post('/guru/jurnal', [JurnalController::class, 'store'])->name('guru.jurnal.store');
    Route::get('/guru/jurnal/{id}/edit', [JurnalController::class, 'edit'])->name('guru.jurnal.edit');
    Route::put('/guru/jurnal/{id}', [JurnalController::class, 'update'])->name('guru.jurnal.update');
    Route::delete('/guru/jurnal/{id}', [JurnalController::class, 'destroy'])->name('guru.jurnal.destroy');
    Route::get('/guru/jurnal/{id}/edit', [JurnalController::class, 'edit'])->name('guru.jurnal.edit');
    Route::put('/guru/jurnal/{id}', [JurnalController::class, 'update'])->name('guru.jurnal.update');

});


require __DIR__.'/auth.php';
