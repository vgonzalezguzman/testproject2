<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CursController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/cursos', [CursController::class, 'index'])->name('cursos.index');
    Route::get('/cursos/create', [CursController::class, 'create'])->name('cursos.create');
    Route::post('/cursos', [CursController::class, 'store'])->name('cursos.store');
    Route::get('/cursos/{id}', [CursController::class, 'show'])->name('cursos.show');
    Route::get('/cursos/{id}/edit', [CursController::class, 'edit'])->name('cursos.edit');
    Route::put('/cursos/{id}', [CursController::class, 'update'])->name('cursos.update');
    Route::delete('/cursos/{id}', [CursController::class, 'destroy'])->name('cursos.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
