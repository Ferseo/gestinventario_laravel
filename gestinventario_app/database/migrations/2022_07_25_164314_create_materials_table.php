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
        Schema::create('materials', function (Blueprint $table) {
           // $table->increments('id');
           $table->id();
           $table->string('categoria')->nullable();
           $table->string('tipo_material')->nullable();
           $table->string('marca')->nullable();
           $table->string('modelo')->nullable();
           $table->string('cantidad')->nullable();
           $table->string('utilidad')->nullable();
           $table->string('metros')->nullable();
           $table->string('ubicacion')->nullable();
           $table->string('anio_compra')->nullable();
           $table->string('tipo_conexion')->nullable();
           $table->string('ult_revision')->nullable();
           $table->string('is_active')->nullable();
           $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('materials');
    } 
};
