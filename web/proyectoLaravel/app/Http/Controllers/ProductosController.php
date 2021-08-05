<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    //
    public function getMarcas(){
        $marcas = array();
        $marcas [] = "Lider";
        $marcas [] = "Tottus";
        $marcas [] = "Acuenta";
        $marcas [] = "Santa Isabel";
        $marcas [] = "Jumbo";
        
        return $marcas;
    }
    
    public function crearProductos(Request $request){
        $input = $request->all();
        $producto = new Producto();
        $producto->nombre = $input["nombre"];
        $producto->descripcion = $input["descripcion"];
        $producto->marca = $input["marca"];
        $producto->etiquetas = $input["etiquetas"];

        $producto->save();
        return $producto;
    }

    public function getProductos(){
        $producto = Producto::all();
        return $producto;
    }

    public function eliminarProductos(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $productos = Producto::findOrFail($id);
        $productos->delete();
        return "ok";
    }
}
