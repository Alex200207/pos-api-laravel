<?php
// Definir las rutas para los productos

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraProductoController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductoVentaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;

// Definir las rutas para los productos
Route::apiResource('/productos', ProductoController::class);
Route::apiResource('/proveedores', ProveedorController::class);
Route::apiResource('/clientes', ClienteController::class);
Route::apiResource('/ventas', VentasController::class);
Route::apiResource('/compras', ComprasController::class);
Route::apiResource('/producto-ventas', ProductoVentaController::class);
Route::apiResource('/compra-producto', CompraProductoController::class);


