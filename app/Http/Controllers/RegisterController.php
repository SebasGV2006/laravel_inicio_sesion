<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Para encriptar la contraseña
use App\Models\Persona; // Modelo del usuario

class RegisterController extends Controller
{
    public function actionRegister(Request $request)
    {
        return view('register');
    }
    public function register (Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:50',
            'password' => 'required|string|min:8',
        ]);

        $user = Persona::create([
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                //'password' => password_hash($request->password, PASSWORD_BCRYPT)
            ]);

        return redirect()->route('login')->with('success', 'Registro exitoso.');
    }
}
