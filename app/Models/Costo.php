<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costo extends Model
{
    use HasFactory;
    protected $table = 'costos';

    protected $fillable = [
        'curso_id',
        'periodo',
        'costo_derechohabiente',
        'costo_publico',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

}
