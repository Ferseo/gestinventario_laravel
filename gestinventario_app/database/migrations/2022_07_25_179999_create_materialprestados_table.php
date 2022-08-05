<?php

use App\Models\Material;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_prestados', function (Blueprint $table) {
            $table->id();
            //$table->foreignIdFor(Material::class);
            $table->string('material_prestado')->nullable();
            $table->dateTime('dia_prestamo')->nullable();
            $table->dateTime('dia_devolucion')->nullable();
            $table->string('estado_material')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('persona_prestamo')->nullable();
            $table->string('devuelto')->nullable();
            $table->string('estado_devolucion')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
