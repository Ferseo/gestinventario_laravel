<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cableado extends Model
{
    use HasFactory;

    protected $cableado = [
        'tipoMaterial',
        'cantidad',
        'metos',
        'ubicacion',
        'codigo',
    ];

    protected $fillable = [
        'tipoMaterial',
        'cantidad',
        'metos',
        'ubicacion',
    ];

    public $timestamps = false;
}
