<?php

namespace App\Http\Controllers;

use App\Models\Servicio as ModelsServicio;
use Illuminate\Http\Request;
// use DB;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $servicios = DB::table('servicios')->get();
        //$servicios = Servicio::get();
        //$servicios = Servicio::latest('titulo')->get();
        // $servicios = Servicio::orderBy('titulo', 'asc')->get();
        $servicios = Servicio::latest()->paginate(2);
        return view('servicios', compact('servicios'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('show', ['servicio' => Servicio::find($id)]);
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
