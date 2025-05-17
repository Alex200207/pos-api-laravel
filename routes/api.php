<?php
// Definir las rutas para los productos

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraProductoController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductoVentaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

//proteger rutaS

Route::middleware('auth:sanctum')->group(function () {
Route::apiResource('/productos', ProductoController::class);
Route::apiResource('/proveedores', ProveedorController::class);
Route::apiResource('/clientes', ClienteController::class);
Route::apiResource('/ventas', VentasController::class);
Route::apiResource('/compras', ComprasController::class);
Route::apiResource('/producto-ventas', ProductoVentaController::class);
Route::apiResource('/compra-producto', CompraProductoController::class);
Route::apiResource('/todos', [TodoController::class]);
//cerrar sesion
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});



// Definir las rutas para los productos

//definir las rutas para las autenticaciones
Route::post('/login', [AuthController::class, 'login']);



