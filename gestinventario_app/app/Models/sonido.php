<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sonido extends Model
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
        'Observaciones',
    ];

    protected $fillable = [
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

    public $timestamps = false;
}
