<?php

namespace App\Http\Controllers;

use App\Models\ProductoVenta;
use Illuminate\Http\Request;

class ProductoVentaController extends Controller
{
    public function index()
    {
        $productoVentas = ProductoVenta::all();
        return response()->json($productoVentas);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'producto_id' => 'required|integer',
            'venta_id' => 'required|integer',
            'cantidad' => 'required|integer',
            'precio_unitario' => 'required|numeric',
        ]);

        $productoVenta = ProductoVenta::create($validatedData);
        return response()->json($productoVenta, 201);
    }

    public function show($id)
    {
        $productoVenta = ProductoVenta::findOrFail($id);
        return response()->json($productoVenta);
    }



    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'producto_id' => 'required|integer',
            'venta_id' => 'required|integer',
            'cantidad' => 'required|integer',
            'precio_unitario' => 'required|numeric',
        ]);

        $productoVenta = ProductoVenta::findOrFail($id);
        $productoVenta->update($validatedData);
        return response()->json($productoVenta);
    }

    public function destroy($id)
    {
        $productoVenta = ProductoVenta::findOrFail($id);
        $productoVenta->delete();
        return response()->json(['message' => 'ProductoVenta deleted successfully']);
    }
}
