<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = 'grupos';
    protected $fillable = [
        
        'fecha_inicio',
        'fecha_fin',
        'dias',
        'hora_inicio',
        'hora_fin',
        'capacidad'				
    ];
}
