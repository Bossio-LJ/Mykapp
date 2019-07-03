<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->String('id');
            $table->string('Nombre');
            $table->string('Responsable');
            $table->UnsignedBigInteger('IdPrograma');
            $table->foreign('IdPrograma')->references('id')->table('Programa')
            $table->UnsignedBigInteger('IdNivelFormacion');
            $table->foreign('IdNivelFormacion')->references('id')->table('NivelFormacion');
            ;
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas');
    }
}
