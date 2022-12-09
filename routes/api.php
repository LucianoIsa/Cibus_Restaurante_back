<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 * RUTAS DE cliente
 */
/*****POST*****/
//Ruta para registrar un cliente en la base de datos
Route::post('insertarCliente', [ClienteController::class, 'insertarCliente']);

/*****GET*****/
//Ruta para ver todos los clientes no nulos
Route::get('obtenerClientes', [ClienteController::class, 'obtenerClientes']);

//Ruta para obtener un cliente identificado con el id
Route::get('obtenerCliente/{id}', [ClienteController::class, 'obtenerCliente']);

/*****PUT*****/
//Ruta para actualizar un cliente identificado con el id
Route::put('actualizaCliente/{id}', [ClienteController::class, 'actualizaCliente']);

/*****DELETE*****/
//Ruta para hacer un borrado logico de una cliente identificado con el id
Route::delete('borrarCliente/{id}', [ClienteController::class, 'borrarCliente']);

/** RUTA DE TEST O PRUEBA */
Route::get('prueba', [ClienteController::class, 'prueba']);