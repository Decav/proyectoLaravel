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

        $producto->save();
        return $producto;
    }

    public function getProductos(){
        $producto = Producto::all();
        return $producto;
    }
}
