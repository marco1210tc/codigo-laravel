<?php

namespace App\Http\Controllers;

use App\Models\Servicio as ModelsServicio;
use Illuminate\Http\Request;
// use DB;
use App\Models\Servicio;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Events\ServicioSaved;
use App\Http\Requests\CreateServicioRequest;
use Illuminate\Contracts\Cache\Store;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        // $this->middleware('auth')->only('create', 'edit');
        $this->middleware('auth')->except('show', 'index');
    }

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
        $servicio = new Servicio($request->validated());
        $servicio->image = $request->file('image')->store('images');
        $servicio->save();

        //optimizar la imagen guardada
        $image = Image::read(Storage::get($servicio->image))
            ->scale(width: 600)
            ->reduceColors(255)
            ->encode();

        //sobreescribimos la imagen
        Storage::put($servicio->image, (string) $image);

        ServicioSaved::dispatch($servicio);

        return redirect()->route('servicios.index')->with('estado', 'El servicio se creó correctamente.');
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

        if ($request->hasFile('image')) {
 
            if ($servicio->image && Storage::exists($servicio->image)) {
                Storage::delete($servicio->image);
            }
            
            $servicio->image = $request->file('image')->store('images');
        }
    
        $servicio->fill($request->validated());
        $servicio->save();

        //optimizar la imagen guardada
        $image = Image::read(Storage::get($servicio->image))
            ->scale(width: 600)
            ->reduceColors(255)
            ->encode();

        //sobreescribimos la imagen
        Storage::put($servicio->image, (string) $image);
        //disparar evento
        ServicioSaved::dispatch($servicio);

        return redirect()->route('servicios.show', $servicio);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        Storage::delete($servicio->image);
        $servicio->delete();
        return redirect()->route('servicios.index');
    }
}
