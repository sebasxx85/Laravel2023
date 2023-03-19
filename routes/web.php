<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::get('productos', [ProductoController::class, 'index']);


Route::get('productos/{producto}', function ($producto) {
    return "Detalle del Producto $producto";
});

Route::get('clientes/{id?}', function ($id = 1) { //valor predeterminado
    return "Cliente $id";
});

Route::get('clientes/{id}/venta/{idVenta?}', function ($id = 1, $idVenta = null) { //valor predeterminado
    if ($idVenta == null) {
        return "ERROR";
    }
    return "El cliente $id realizo la venta $idVenta";
});

Route::get('/pruebas/(nombre?)', function ($nombre = null) {
    $texto = "<h1>Hola Mundo desde ruta</h1>"; //Este texto viene desde una view
    $texto .= 'Nombre: ' . $nombre;

    return view('pruebas', array(
        'texto' => $texto
    ));
  });
  

Route::get('/', function () {
  //  return view('welcome');
  return "<h1>Hola Mundo</h1>";
});
