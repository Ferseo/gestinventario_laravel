<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    
    protected $material = [
        'id',
        'categoria',
        // Estaría guay saber los tipo de materiales que se pueden almacenar en la base de datos.
        'tipo_material',
        'marca',
        'modelo',
        'cantidad',
        'utilidad',
        'metros',
        'ubicacion',
        'anio_compra',
        'tipo_conexion',
        'ult_revision',
        'is_active',
        'observaciones',
    ];

    protected $fillable = [
        'categoria',
        'tipo_material',
        'marca',
        'modelo',
        'cantidad',
        'utilidad',
        'metros',
        'ubicacion',
        'anio_compra',
        'tipo_conexion',
        'ult_revision',
        'is_active',
        'observaciones',
    ];

}
