<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
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
            $table->string('tipo');
            $table->unsignedBigInteger('especialidad_id')->nullable() ;
            $table->unsignedBigInteger('cargo_id')->nullable() ;
            $table->unsignedBigInteger('usuario_id')->nullable() ;
            $table->unsignedBigInteger('horario_id')->nullable() ;
            
            $table->foreign('especialidad_id')->references('id')->on('especialidad')->onDelete('cascade');
            $table->foreign('cargo_id')->references('id')->on('cargo')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('horario_id')->references('id')->on('horario')->onDelete('cascade');
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
        Schema::dropIfExists('personal');
    }
}
