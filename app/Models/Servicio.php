<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    // use HasFactory;
    protected $fillable = ['titulo', 'descripcion']; 
    //estos cammpos se mapean con la BD y deben ser
    //iguales como se encuetran en la tabla

    // protected $guarded = [];
}
