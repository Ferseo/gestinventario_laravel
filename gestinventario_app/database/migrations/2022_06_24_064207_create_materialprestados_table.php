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
        // TODO: Cuando se termine de testear, mirar nullables y ver cuales se van a quedar y cuales no.

        Schema::create('materialprestados', function (Blueprint $table) {
            
            $table->id();
            $table->string('material_prestado')->nullable();
            $table->string('dia_prestado')->nullable();
            $table->string('dia_devuelto')->nullable();
            $table->string('estado_material')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('persona_prestamo')->nullable();
            $table->string('estado_devolucion')->nullable();
            $table->string('trabajador_presta')->nullable();
            $table->string('trabajador_recibe')->nullable();
            $table->tinyInteger('is_devuelto')->nullable();
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
