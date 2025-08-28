<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/equipos/create',  [EquipoController::class, 'create'])->middleware(['auth', 'verified'])->name('equipos.create');
Route::get('/equipos/{equipo}/edit',  [EquipoController::class, 'edit'])->middleware(['auth', 'verified'])->name('equipos.edit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
