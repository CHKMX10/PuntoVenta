<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('vistas.loginusuario');
    }

    public function validarUser(Request $request)
    {
        $request->validate([
            'nombre_user' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('nombre_user', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route("vistas.menu")->with('message', 'Inicio de Sesión Exitoso!')->with('class', 'correct');

        }
        return redirect()->route("vistas.loginusuarios")->with('message', 'Fallo en Inicio de Sesión')->with('class', 'error');

    }
    public function subirUser(Request $request){
        try {
            Usuarios::create($request->all());
                return redirect()->route("vistas.loginusuario")->with('message', 'Usuario Creado con exito!')->with('class', 'correct');
        } catch (\Exception $e) {
            return redirect()->route("vistas.registrarUsuario")->with('message', 'Fallo en crear usuario')->with('class', 'error');
        }
    }
    public function logout()
	{
	    if (Auth::check()) {
	        return view('vistas.menuUser');
	    }
        return redirect()->route("vistas.loginusuario")->with('message', 'No has iniciado sesión')->with('class', 'error');
    }
}
