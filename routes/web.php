<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Livewire\HistorialMantenimientos;
use Illuminate\Support\Facades\Route;

// Equipos
Route::get('/dashboard', [EquipoController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/equipos/create',  [EquipoController::class, 'create'])->middleware(['auth', 'verified'])->name('equipos.create');
Route::get('/equipos/{equipo}/edit',  [EquipoController::class, 'edit'])->middleware(['auth', 'verified'])->name('equipos.edit');
Route::get('/equipos/{equipo}',  [EquipoController::class, 'show'])->middleware(['auth', 'verified'])->name('equipos.show');


// Mantenimientos
Route::get('/mantenimientos/{mantenimiento}', [MantenimientoController::class, 'show'])->name('mantenimientos.show');
Route::put('/mantenimientos/{mantenimiento}', [MantenimientoController::class, 'update'])->name('mantenimientos.update');
Route::get('/equipos/{equipo}/historial', HistorialMantenimientos::class)->name('equipos.historial');

// Notificaciones
Route::get('/notificaciones', NotificationController::class)->name('notificaciones');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
