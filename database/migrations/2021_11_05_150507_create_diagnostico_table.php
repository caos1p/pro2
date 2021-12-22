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
            $table->unsignedBigInteger('personal_id')->nullable() ;
            $table->unsignedBigInteger('citamedica_id')->nullable() ;
            $table->foreign('citamedica_id')->on('citamedica')->references('id')->onDelete('cascade');
            $table->foreign('personal_id')->on('personal')->references('id')->onDelete('cascade');
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
