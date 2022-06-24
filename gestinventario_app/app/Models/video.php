<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $sonido = [
        'codigo',
        'tipoMaterial',
        'marca',
        'modelo',
        'cantidad',
        'utilidad',
        'ubicacion',
        'anioCompra',
        'tipoConexion',
        'ultimaRevision',
        'observaciones',
    ];
}
