<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otros extends Model
{
    use HasFactory;

    protected $otros = [
        'tipoMaterial',
        'cantidad',
        'utilidad',
        'ubicacion',
        'observaciones',
        'codigo',
    ];

    protected $fillable = [
        'tipoMaterial',
        'cantidad',
        'utilidad',
        'ubicacion',
        'observaciones',
    ];

    public $timestamps = false;
}
