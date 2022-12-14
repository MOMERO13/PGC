<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Grupo extends Model
{
    use HasFactory;
    protected $table = 'grupos';
    protected $fillable = [
        'curso_id',
        'instructor_id',
        'nombre',
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

    protected function horaInicio(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::createFromFormat('H:i:s',$value)->format('H:i'),
       
        );
    }
    
    protected function horaFin(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::createFromFormat('H:i:s',$value)->format('H:i'),
       
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

    public function inscritos()
    {
        return $this->hasMany(Inscripcion::class);
    }

    protected $casts=[
        'fecha_inicio'=>'datetime:Y-m-d',
        'fecha_fin'=>'datetime:Y-m-d'
    ];
    


}
