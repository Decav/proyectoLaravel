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
    
}
