<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\NegociosController;
use App\Http\Controllers\EtiquetasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("marcas/get" ,[ProductosController::class, "getmarcas"]);

Route::get("negocios/get",[NegociosController::class, "getNegocio"]);
Route::post("negocios/post",[NegociosController::class, "crearNegocios"]);
Route::post("negocios/delete",[NegociosController::class, "eliminarNegocio"]);

Route::get("etiquetas/get",[EtiquetasController::class, "getEtiquetas"]);
Route::post("etiquetas/post",[EtiquetasController::class, "crearEtiquetas"]);
Route::post("etiquetas/delete",[EtiquetasController::class, "eliminarEtiqueta"]);