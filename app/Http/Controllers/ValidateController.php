<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public function index (Request $request)
    {
        $id = $request -> query("id");
        $email = $request->input("email");
        $contrasena = $request->input("password");
        $data = ['id' => $id,
                 'email' => $email,
                 'contrasena' => $contrasena,];
        return view('home', $data);
    }
}
