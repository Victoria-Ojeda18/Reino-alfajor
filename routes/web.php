<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FabricaController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post'); // ← ¡así debe quedar!

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/pedidos', [AuthController::class, 'showPedidos'])->name('pedidos');
    Route::post('/pedidos', [AuthController::class, 'storePedido'])->name('pedidos.store');
});

Route::get('/fabrica', function () {
    return view('fabrica');
});
Route::get('/fabrica', [FabricaController::class, 'index'])->name('fabrica');

Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');
Route::get('/catalogo', [App\Http\Controllers\CatalogoController::class, 'index'])->name('catalogo');


Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');