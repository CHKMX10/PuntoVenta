<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Administradores;

class AdminController extends Controller
{
    public function admin()
    {
        return view('vistas.loginAdmin');
    }

    public function validarAdmin(Request $request)
    {
        $request->validate([
            'nombre_admin' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('nombre_admin', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route("vistas.menu")->with('message', 'Inicio de Sesión Exitoso!')->with('class', 'correct');
        }
    
        return redirect()->route("vistas.loginAdmin")->with('message', 'Fallo en Inicio de Sesión')->with('class', 'error');
    }

    public function subirAdmin(Request $request)
    {
        try {
            Administradores::create([
                'nombre_admin' => $request->input('nombre_admin'),
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);
            return redirect()->route("vistas.loginAdmin")->with('message', 'Administrador Creado con éxito!')->with('class', 'correct');
        } catch (\Exception $e) {
            return redirect()->route("vistas.registrarAdmin")->with('message', 'Fallo en crear administrador')->with('class', 'error');
        }
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route("vistas.menu")->with('message', 'Exito!')->with('class', 'correct');

        }
        return redirect()->route("vistas.validarAdmin");
}
}