<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string( 'apellidopaterno');
            $table->string('apellidomaterno');
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('email');
            $table->string('fechadenacimiento');
            $table->string('genero');
            $table->string('pais');
            $table->integer('ci');
            $table->unsignedBigInteger('usuario_id')->nullable() ;
            $table->timestamps();
            $table->foreign('usuario_id')->on('users')->references('id')->onDelete('cascade');

       

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
