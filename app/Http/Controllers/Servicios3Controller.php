<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Servicios3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $servicios = [
              ['titulo' => 'Servicio 01'],
              ['titulo' => 'Servicio 02'],
              ['titulo' => 'Servicio 03'],
              ['titulo' => 'Servicio 04'],
              ['titulo' => 'Servicio 05'],
            ];
        
            return view('servicios', compact('servicios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
