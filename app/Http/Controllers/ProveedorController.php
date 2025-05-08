<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        return response()->json(Proveedor::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'sometimes|string|max:255',
            'telefono' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|max:255',
        ]);

        $proveedor = Proveedor::create($request->all());

        return response()->json($proveedor, 201);
    }

    public function show($id)
    {
        $proveedor = Proveedor::find($id);

        if (!$proveedor) {
            return response()->json(['message' => 'Proveedor not found'], 404);
        }

        return response()->json($proveedor);
    }

    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::find($id);

        if (!$proveedor) {
            return response()->json(['message' => 'Proveedor not found'], 404);
        }

        $request->validate([
            'nombre' => 'sometimes|string|max:255',
            'direccion' => 'sometimes|string|max:255',
            'telefono' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|max:255',
        ]);

        $proveedor->update($request->all());

        return response()->json($proveedor);
    }

    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);

        if (!$proveedor) {
            return response()->json(['message' => 'Proveedor not found'], 404);
        }

        $proveedor->delete();

        return response()->json(['message' => 'Proveedor deleted successfully']);
    }
}
