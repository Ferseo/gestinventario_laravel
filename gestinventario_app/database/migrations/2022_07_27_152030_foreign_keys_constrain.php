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
        Schema::table('material_prestados', function(Blueprint $table){
          
            $table->foreignId('trabajador_presta')->references('id')->on('users')->after('id');
            $table->foreignId('trabajador_recibe')->references('id')->on('users')->after('id');
            $table->foreignId('materials_id')->after('id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
