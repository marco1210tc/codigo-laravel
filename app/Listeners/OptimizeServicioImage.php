<?php

namespace App\Listeners;

use App\Events\ServicioSaved;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OptimizeServicioImage implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ServicioSaved $event): void
    {
        //optimizar la imagen guardada
        $image = Image::read(Storage::get($event->servicio->image))
            ->scale(width: 600)
            ->reduceColors(255)
            ->encode();

        //sobreescribimos la imagen
        Storage::put($event->servicio->image, (string) $image);
    }
}
