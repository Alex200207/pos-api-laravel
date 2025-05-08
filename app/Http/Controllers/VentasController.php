<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index()
    {
        $ventas = Ventas::all();
        return response()->json($ventas);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cliente_id' => 'required|integer',
            'fecha' => 'required|date',
            'total' => 'required|numeric',
            'estado' => 'required|string',
        ]);

        $venta = Ventas::create($validatedData);
        return response()->json($venta, 201);
    }

    public function show($id)
    {
        $venta = Ventas::findOrFail($id);
        return response()->json($venta);
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cliente_id' => 'required|integer',
            'fecha' => 'required|date',
            'total' => 'required|numeric',
            'estado' => 'required|string',
        ]);

        $venta = Ventas::findOrFail($id);
        $venta->update($validatedData);
        return response()->json($venta);
    }

    public function destroy($id)
    {
        $venta = Ventas::findOrFail($id);
        $venta->delete();
        return response()->json(['message' => 'Venta deleted successfully']);
    }
}
