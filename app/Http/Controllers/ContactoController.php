<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

//use Illuminate\Http\Request; //eliminamos este recurso 
//porque estamos usando el método request

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $mensaje = request()->validate([
            'nombre' => 'required',
            'email' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required',
        ], [
            'nombre.required' => 'Ingresa tu nombre',
            'email.required' => 'Ingresa tu correo',
            'asunto.required' => 'Ingresa el asunto',
            'mensaje.required' => 'Ingresa el mensaje',
        ]);
        // return 'Datos validados';
        Mail::to('martold.1210@gmail.com')->send(new MensajeRecibido($mensaje));
        //dd(config('mail'));
        return 'Mensaje enviado';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
