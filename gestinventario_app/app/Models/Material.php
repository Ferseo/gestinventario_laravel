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
        'tipo_Material',
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
        'tipo_Material',
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

    public $timestamps = false;

    /**
     * Funcion que relaciona un material con los materiales prestados,
     * se utiliza 'hasOne' por que un material solo puede ser prestado 
     * una vez
     *
     * @return 
     */
    // public function material_prestado(){
    //     return $this->hasOne(materialprestado::class);
    // }
}
