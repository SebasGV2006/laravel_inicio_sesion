<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function actionLogin(Request $request)
    {
        return view('login');
    }
    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $persona = DB::table('personas')->where('email', $credentials['email'])->first();

        if ($persona && Hash::check($credentials['password'], $persona->password)) {
    
            $request->session()->put('persona', [
                'id' => $persona->id,
                'email' => $persona->email,
                'password' => $persona->password,
            ]);

      
            return redirect('/home');
        }

  
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no son correctas.',
        ])->onlyInput('email'); 
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        $request->session()->forget('persona');

        return redirect('/login');
    }
}
