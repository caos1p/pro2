<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitamedicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citamedica', function (Blueprint $table) {
            $table->id();
            $table->string( 'title');
            $table->string('start');
            $table->string('end');
            $table->timestamps();
            $table->unsignedBigInteger('paciente_id')->nullable() ;
            $table->unsignedBigInteger('especialidad_id')->nullable() ;
            
            $table->foreign('especialidad_id')->on('especialidad')->references('id')->onDelete('cascade');
            $table->foreign('paciente_id')->on('paciente')->references('id')->onDelete('cascade');
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citamedica');
    }
}
