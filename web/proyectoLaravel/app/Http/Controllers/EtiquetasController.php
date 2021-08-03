<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etiqueta;

class EtiquetasController extends Controller
{
    //
    public function crearEtiquetas(Request $request){
        $input = $request->all();
        $etiqueta = new Etiqueta();
        $etiqueta->nombre = $input["nombre"];
        $etiqueta->save();
        return $etiqueta;

    }
    public function getEtiquetas(){
        $etiqueta = Etiqueta::all();
        return $etiqueta;
    }

    public function eliminarEtiqueta(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $etiqueta = Etiqueta::findOrFail($id);
        $etiqueta->delete();
        return "ok";
    }
}
