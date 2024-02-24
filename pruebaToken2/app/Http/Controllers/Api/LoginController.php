<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password'); // Cambiado 'login' a 'email'

        // Utilizamos 'email' en lugar de 'login' en el método Auth::attempt
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Utilizamos $user->email para crear el token
            $token = $user->createToken($user->email)->plainTextToken;
            return response()->json(['token' => $token]);
        }

        return response()->json(['error' => 'Credenciales no válidas'], 401);
    }
}

