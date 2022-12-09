<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Mail\ContactEmail;
use App\Mail\NuevoCliente;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{


    /**
     * Devuelve el listado de los contactos
     *
     * @return Response
     */
    public function obtenerClientes()
    {
        $clientes = Cliente::all();
        $data = $clientes->map(function ($clientes) {
            return [
                'id' => $clientes->id,
                'nombre' => $clientes->nombre,
                'telefono' => $clientes->telefono,
                'mail' => $clientes->mail,
                'mensaje' => $clientes->mensaje,
                'created_at' => $clientes->created_at->toDateTimeString(),
                'updated_at' => $clientes->updated_at->toDateTimeString()
            ];
        });

        return response()->json([
            'mensaje' => 'Listado de todos los Clientes',
            'data' => $data
        ]);
    }
    /**
     * Obtiene la informacion de la DB del contacto definido
     *
     * @param id , id del cliente
     * @return \Illuminate\Http\Response
     */
    public function obtenerCliente($id)
    {
        $cliente = Cliente::findOrFail($id);

        return response()->json([
            'mensaje' => 'Cliente',
            'data' => $cliente
        ]);
    }
    /**
     * Guarda un nuevo cliente en la BD
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertarCliente(ClienteRequest $request)
    {
        $nuevoCliente = Cliente::create([
            'nombre_completo' => $request['nombre_completo'],
            'email' => $request['email'],
            'telefono' => $request['telefono'],
            'fecha_reserva' => $request['fecha_reserva']
        ]);

        $details = [
            'title' => 'Recibiste una nueva reserva',
            'body' =>   $nuevoCliente
        ];

        self::enviarMail($details);

        return response()->json([
            'mensaje' => 'Se agrego correctamente la Nueva Reserva',
            'data' => $nuevoCliente
        ]);
    }
    /**
     * Actualiza el Cliente que tiene $id, los campos son obligatorios
     *
     * @param id , id del cliente
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function actualizaCliente($id, ClienteRequest $request)
    {
        $cliente = Cliente::find($id);
        $cliente->nombre_completo = $request['nombre_completo'];
        $cliente->email = $request['email'];
        $cliente->telefono = $request['telefono'];
        $cliente->fecha_reserva = $request['fecha_reserva'];
        $cliente->save();

        return response()->json([
            'mensaje' => 'Datos de la reserva actualizados',
            'data' => $cliente
        ]);
    }

    /**
     * Borra Logicamente el contacto segun su id
     *
     * @param  id , id del contacto que se desea borrar
     * @return \Illuminate\Http\Response
     */
    public function borrarCliente($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return response()->json([
            'mensaje' => 'Contacto',
            'data' => $cliente
        ]);
    }

    /**
     * Envio de email
     * @param details son los detalles que va a tener el email
     */

    private function enviarMail($details)
    {
        Mail::to('lucianoisabb@hotmail.com')->send(new NuevoCliente($details));
    }

    public function prueba()
    {
        return response()->json([
            'message' => 'La Prueba se ejecuto correctamente',
            'data' => 'data data data'
        ]);
    }
}