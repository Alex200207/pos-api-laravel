<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Método para iniciar sesión
    public function login(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar autenticar al usuario
        if (auth()->attempt($request->only('email', 'password'))) {
            // Autenticación exitosa, generar un token de acceso
            $token = auth()->user()->createToken('access_token')->plainTextToken;

            return response()->json(['token' => $token]);
        }

        // Autenticación fallida
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    // Método para cerrar sesión
    public function logout(Request $request)
    {
        // Revocar el token de acceso
        auth()->user()->tokens()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }
}
