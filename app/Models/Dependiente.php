<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependiente extends Model
{
    use HasFactory;
    protected $table = 'dependientes';

    protected $fillable = [
        'nombre',
        'apellidos',
        'fecha_nacimiento',
        'curp',
        'estado',
        'municipio',
        'codigo_postal',
        'colonia',
        'calle',
        'numero_exterior',
        'numero_interior',
        'numero_telefono',		
    ];
    protected $casts=[
        'fecha_nacimiento'=>'datetime:Y-m-d'
    ];


    											
}
