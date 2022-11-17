<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;
    protected $table = 'inscripciones';


    protected $fillable = [
        'grupo_id',
        'curso_id',
        'dependiente_id'
    ];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function inscrito()
    {
        return $this->belongsTo(Dependiente::class);
    }
}
