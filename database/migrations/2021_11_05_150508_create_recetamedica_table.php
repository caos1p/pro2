<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetamedicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetamedica', function (Blueprint $table) {
            $table->id();
            $table->string( 'fecha');
            $table->string('prescripcion');
            $table->unsignedBigInteger('diagnostico_id')->nullable() ;
            $table->foreign('diagnostico_id')->on('diagnostico')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('recetamedica');
    }
}
