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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_tarea')->nullable();
            $table->string('trabajador_desempenia')->nullable();
            $table->string('dia_tarea')->nullable();
            $table->string('horario_tarea')->nullable();
            $table->string('lugar_tarea')->nullable();
            $table->tinyInteger('is_realizada')->nullable(); 
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
        Schema::dropIfExists('tareas');
    }
};
