<?php

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
        Schema::create('materialprestados', function (Blueprint $table) {
            $table->string('materialPrestado');
            $table->string('diaRetirada');
            $table->string('diaEntrega');
            $table->string('estadoMaterial');
            $table->string('observaciones');
            $table->string('personaPrestamo');
            $table->string('devuelto');
            $table->string('estado_devolucion');
            $table->string('trabajador_presta');
            $table->string('trabajador_recibe');
            $table->id();
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
        Schema::dropIfExists('materialprestados');
    }
};
