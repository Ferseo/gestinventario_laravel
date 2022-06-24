<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materialmontaje extends Model
{
    use HasFactory;

    protected $mat_montaje = [
        'tipoMaterial',
        'cantidad',
        'utilidad',
        'ubicacion',
        'observaciones',
        'codigo',
    ];
}
