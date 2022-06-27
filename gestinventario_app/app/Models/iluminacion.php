<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iluminacion extends Model
{
    use HasFactory;

    protected $iluminacion = [
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
        'Observaciones',
    ];

    public $timestamps = false;
}
