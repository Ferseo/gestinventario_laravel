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
        // TODO: Cuando se termine de testear, mirar nullables y ver cuales se van a quedar y cuales no.

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->unique();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('nombre_usuario')->nullable();
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('categoria')->nullable();
            $table->string('anio_ingreso')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->rememberToken();
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
        // Para que no pete las foreign id de esta tabla
        Schema::dropIfExists('material_prestados');

        Schema::dropIfExists('users');
    }
};
