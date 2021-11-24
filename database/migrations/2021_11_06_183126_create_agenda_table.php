<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->string( 'detalle');
            $table->timestamps();
            $table->unsignedBigInteger('citamedica_id')->nullable() ;
            $table->unsignedBigInteger('personal_id')->nullable() ;
            $table->unsignedBigInteger('diagnostico_id')->nullable() ;
            
            $table->foreign('citamedica_id')->on('citamedica')->references('id')->onDelete('cascade');
            $table->foreign('personal_id')->on('personal')->references('id')->onDelete('cascade');
            $table->foreign('diagnostico_id')->on('diagnostico')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}
