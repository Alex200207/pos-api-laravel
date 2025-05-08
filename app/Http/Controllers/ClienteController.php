<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }
        return response()->json($cliente);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'telefono' => 'nullable|string|max:15',
            'direccion' => 'nullable|string|max:255',
        ]);

        $cliente = Cliente::create($validatedData);
        return response()->json($cliente, 201);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:clientes,email,' . $id,
            'telefono' => 'nullable|string|max:15',
            'direccion' => 'nullable|string|max:255',
        ]);

        $cliente->update($validatedData);
        return response()->json($cliente);
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        $cliente->delete();
        return response()->json(['message' => 'Cliente eliminado correctamente']);
    }
}
