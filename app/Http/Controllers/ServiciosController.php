<?php

namespace App\Http\Controllers;

use App\Models\Servicio as ModelsServicio;
use Illuminate\Http\Request;
// use DB;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

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
        return view('create', ['servicio' => new Servicio]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateServicioRequest $request)
    {
        // $title = request('name');
        // $description = request('description');
        
        // Servicio::create([
        //     'titulo'=> $title,  //poner aqui los campos de la tabla, example: 'titulo' y 'descripcion' son los campos en la BD
        //     'descripcion' => $description
        // ]);
        // Servicio::create(request()->all());//no funciona

        // Servicio::create([
        //     'titulo' => request('name'),
        //     'descripcion' => request('description')
        // ]);

        // $camposv = request()->validate([
        //     'titulo' => 'required',
        //     'descripcion' => 'required'
        // ]);
        // Servicio::create($camposv);

        Servicio::create($request->validated());
        return redirect()->route('servicios.index');
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
        return view('edit', ['servicio' => Servicio::find($id)]);
        //return view('edit', ['servicio']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateServicioRequest $request, string $id)
    {
        $servicio = Servicio::find($id);
        //Servicio::update($request->validated());
        $servicio->update($request->validated());
        return redirect()->route('servicios.show', $servicio);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect()->route('servicios.index');
    }
}
