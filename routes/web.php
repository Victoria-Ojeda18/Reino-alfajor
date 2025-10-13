<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FabricaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\AuthController;

// Rutas públicas
Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('/fabrica', [FabricaController::class, 'index'])->name('fabrica');
Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo');

// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas protegidas (requieren login)
Route::middleware('auth.custom')->group(function () {
    Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
    Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');
});