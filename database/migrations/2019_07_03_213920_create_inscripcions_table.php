<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Date('Fecha');
             $table->UnsignedBigInteger('IdAprendiz');
            $table->foreign('IdAprendiz')->references('id')->table('Persona');
             $table->UnsignedBigInteger('IdConvocatoria');
            $table->foreign('IdConvocatoria')->references('id')->table('Convocatoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcions');
    }
}
