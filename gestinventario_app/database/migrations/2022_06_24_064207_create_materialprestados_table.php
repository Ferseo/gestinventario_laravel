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
        Schema::create('materialprestados', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Material::class);
            $table->string('materialPrestado')->nullable();
            $table->string('diaRetirada')->nullable();
            $table->string('diaEntrega')->nullable();
            $table->string('estadoMaterial')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('personaPrestamo')->nullable();
            $table->string('devuelto')->nullable();
            $table->string('estado_devolucion')->nullable();
            $table->string('trabajador_presta')->nullable();
            $table->string('trabajador_recibe')->nullable();
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
