<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserAccessDashboardMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Agregamos rutas para Post y Categorias
Route::middleware(['auth', UserAccessDashboardMiddleware::class])->resource("/posts", \App\Http\Controllers\Dashboard\PostController::class);
Route::middleware(['auth', UserAccessDashboardMiddleware::class])->resource("/categorias", \App\Http\Controllers\Dashboard\CategoriaController::class);

require __DIR__.'/auth.php';
