<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;


class InvController extends Controller
{
    public function menu(){
        return view('vistas.menu');
    }
    public function menuUser(){
        return view('vistas.menuUser');
    }

    public function lista(){
        $inventario=Inventario::all();
        return view('vistas.lista', compact('inventario'));
    }
    public function listaUser(){
        $inventario=Inventario::all();
        return view('vistas.listaUser', compact('inventario'));
    }
    public function crear(){
        return view('vistas.crear');
    }
    public function crearUser(){
        return view('vistas.registrarUsuario');
    }
    public function crearAdmin(){
        return view('vistas.registrarAdmin');
    }

    public function guardar(Request $request){
        try {
            Inventario::create($request->all());
                return redirect()->route("vistas.lista")->with('message', '¡Registro creado!')->with('class', 'correct');
        } catch (\Exception $e) {
            return redirect()->route("vistas.crear")->with('message', 'Fallo en agregar equipo')->with('class', 'error');
        }
    }

    public function editar(Inventario  $equipo) {
        return view('vistas.editar', compact('equipo'));
    }

    public function update(Request $request,  Inventario $equipo) {
        try {
            $equipo->update($request->all());
            return redirect()->route("vistas.lista")->with('message', 'Equipo actualizado!')->with('class', 'correct');
        } catch (\Exception $e) {
            return redirect()->route("vistas.update")->with('message', 'Fallo en actualizar equipo')->with('class', 'error');
        }
    }

    public function destroy(Inventario $equipo) {
        try {
            $equipo->delete();
            return redirect()->route('vistas.lista')->with('message', 'Equipo eliminado correctamente')->with('class', 'correct');
        } catch (\Exception $e) {
            return redirect()->route('vistas.lista')->with('message', 'Fallo al eliminar el equipo')->with('class', 'error');
        }

    }

    public function buscar()
    {
        return view('vistas.buscar');
    }
    public function buscarUser()
    {
        return view('vistas.buscarUser');
    }

    public function resultado(Request $request)
    {
        $marca = $request->input('marca');
        $inventarios = Inventario::where('marca', 'LIKE', "%$marca%")->get();
        return view('vistas.resultado', ['inventarios' => $inventarios]);
    }
    public function resultadoUser(Request $request)
    {
        $marca = $request->input('marca');
        $inventarios = Inventario::where('marca', 'LIKE', "%$marca%")->get();
        return view('vistas.resultadoUser', ['inventarios' => $inventarios]);
    }
}
