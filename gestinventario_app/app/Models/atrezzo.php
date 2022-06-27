<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atrezzo extends Model
{
    use HasFactory;

    protected $atrezzo = [
        'tipoMaterial',
        'utilidad',
        'ubicacion',
        'cantidad',
        'observaciones',
        'codigo',
    ];
    
    protected $fillable = [
        'tipoMaterial',
        'utilidad',
        'ubicacion',
        'cantidad',
        'observaciones',
    ];

    public $timestamps = false;
}
