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
        Schema::create('credenciales', function (Blueprint $table) {
            $table->string('dni')->primary();
            $table->string('nombre')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('user')->nullable();
            $table->string('password')->nullable();
            $table->string('categoria')->nullable();
            $table->string('anio_ingreso')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            //$table->id();
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
        Schema::dropIfExists('credenciales');
    }
};
