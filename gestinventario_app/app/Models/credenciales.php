<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class credenciales extends Model
{
    use HasFactory;

    protected $credenciales = [
        'dni',
        'nombre',
        'apellidos',
        'user',
        'password',
        'categoria',
        'anio_ingreso',
        'direccion',
        'telefono',
    ];
}
