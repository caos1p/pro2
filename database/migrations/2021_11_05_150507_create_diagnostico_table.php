<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostico', function (Blueprint $table) {
            $table->id();
            $table->string('diagnostico');
            $table->timestamps();
            $table->unsignedBigInteger('recetamedica_id')->nullable() ;
            $table->unsignedBigInteger('paciente_id')->nullable() ;
            $table->foreign('paciente_id')->on('paciente')->references('id')->onDelete('cascade');
            $table->foreign('recetamedica_id')->on('recetamedica')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnostico');
    }
}
