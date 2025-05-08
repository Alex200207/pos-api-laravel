<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index()
    {
        $compras = Compras::all();
        return response()->json($compras);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'proveedor_id' => 'required|integer',
            'fecha' => 'required|date',
            'total' => 'required|numeric',
            'estado' => 'required|string',
        ]);

        $compra = Compras::create($validatedData);
        return response()->json($compra, 201);
    }

    public function show($id)
    {
        $compra = Compras::findOrFail($id);
        return response()->json($compra);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'proveedor_id' => 'integer',
            'fecha' => 'date',
            'total' => 'numeric',
            'estado' => 'string',
        ]);

        $compra = Compras::findOrFail($id);
        $compra->update($validatedData);
        return response()->json($compra);
    }

    public function destroy($id)
    {
        $compra = Compras::findOrFail($id);
        $compra->delete();
        return response()->json(['message' => 'Compra deleted successfully']);
    }
}
