<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = 'grupos';
    protected $fillable = [
        'curso_id',
        'instructor_id',
        'fecha_inicio',
        'fecha_fin',
        'dias',
        'hora_inicio',
        'hora_fin',
        'capacidad',				
    ];


// o en su defecto...
    // Guardar en formato "LMX"
    // Leer en formato "LMX"
    protected function dias(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value,
            set: fn ($value) => implode($value),
        );
    }

    
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
