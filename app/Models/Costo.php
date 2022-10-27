<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costo extends Model
{
    use HasFactory;
    protected $table = 'costos';

    protected $fillable = [
        'periodo',
        'costo_derechohabiente',
        'costo_publico',
    ];
}
