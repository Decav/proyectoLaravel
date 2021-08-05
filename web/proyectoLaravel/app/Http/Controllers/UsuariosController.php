<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuariosController extends Controller
{
    //
    public function registrarUsuario(Request $request){
        $input = $request->all();
        $usuario = new Usuario();
        $usuario->nombre_usuario = $input["nombre_usuario"];
        $usuario->correo_electronico = $input["correo_electronico"];
        $usuario->clave = $input["clave"];
        $usuario->tipo = $input["tipo"];

        $usuario->save();
        return $usuario;
    }

    public function getUsuario(){
        $usuario = Usuario::all();
        return $usuario;
    }

    public function eliminarUsuario(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return "ok";
    }

}
