<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentefamiliarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentefamiliar', function (Blueprint $table) {
            $table->id();
            $table->string( 'abuelosvivos');
            $table->string( 'enfermedadquepadeceabuelos');
            $table->string( 'padrevivo');
            $table->string( 'enfermedadquepadecepadre');
            $table->string( 'madrevivo');
            $table->string( 'enfermedadquepadecemadre');
            $table->string( 'hermanosvivos');
            $table->string( 'enfermedadquepadecehermano');
            $table->string( 'otros');
            $table->unsignedBigInteger('paciente_id')->nullable() ;
            $table->foreign('paciente_id')->on('paciente')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('antecedentefamiliar');
    }
}
