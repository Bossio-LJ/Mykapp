<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Nombre');
            $table->String('Apellido');
            $table->String('Direccion');
            $table->UnsignedBigInteger('IdUsuario');
            $table->foreign('IdUsuario')->references('id')->table('Usuario');  
            $table->UnsignedBigInteger('IdPoblacion');
            $table->foreign('IdPoblacion')->references('id')->table('Poblacion'); 
            $table->UnsignedBigInteger('IdGenero');
            $table->foreign('IdGenero')->references('id')->table('Genero');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
