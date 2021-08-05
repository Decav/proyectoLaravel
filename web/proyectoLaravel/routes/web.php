<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view("/","login")->name("login");
Route::view("/agregar_negocio","agregar_negocio")->name("agregar_negocio");
Route::view("/ver_negocio","ver_negocio")->name("ver_negocio");
Route::view("/agregar_productos","agregar_productos")->name("agregar_productos");
Route::view("/ver_productos","ver_productos")->name("ver_productos");
Route::view("/etiquetas","etiquetas")->name("etiquetas");
Route::view("/home","home")->name("home");
Route::view("/register","register")->name("register");