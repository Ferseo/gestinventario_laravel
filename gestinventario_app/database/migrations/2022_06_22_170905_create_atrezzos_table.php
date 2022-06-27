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
        Schema::create('atrezzo', function (Blueprint $table) {
            $table->string('tipoMaterial');
            $table->string('utilidad');
            $table->string('ubicacion');
            $table->string('cantidad');
            $table->string('observaciones');
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // public function down()
    // {
    //     Schema::dropIfExists('atrezzo');
    // }
};
