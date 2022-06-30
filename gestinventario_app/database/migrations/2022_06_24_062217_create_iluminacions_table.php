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
        Schema::create('iluminacions', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('tipoMaterial');
            $table->string('marca');
            $table->string('modelo');
            $table->string('cantidad');
            $table->string('utilidad');
            $table->string('ubicacion');
            $table->string('anioCompra');
            $table->string('tipoConexion');
            $table->string('ultimaRevision');
            $table->string('Observaciones');
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
        Schema::dropIfExists('iluminacions');
    }
};
