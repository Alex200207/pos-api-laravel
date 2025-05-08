<?php

namespace App\Http\Controllers;

use App\Models\CompraProducto;
use Illuminate\Http\Request;

class CompraProductoController extends Controller
{
    public function index()
    {
        $compraProductos = CompraProducto::all();
        return response()->json($compraProductos);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'producto_id' => 'required|integer',
            'compra_id' => 'required|integer',
            'cantidad' => 'required|integer',
            'precio_unitario' => 'required|numeric',
        ]);

        $compraProducto = CompraProducto::create($validatedData);
        return response()->json($compraProducto, 201);
    }

    public function show($id)
    {
        $compraProducto = CompraProducto::findOrFail($id);
        return response()->json($compraProducto);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'producto_id' => 'integer',
            'compra_id' => 'integer',
            'cantidad' => 'integer',
            'precio_unitario' => 'numeric',
        ]);

        $compraProducto = CompraProducto::findOrFail($id);
        $compraProducto->update($validatedData);
        return response()->json($compraProducto);
    }

    public function destroy($id)
    {
        $compraProducto = CompraProducto::findOrFail($id);
        $compraProducto->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
