<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentepersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentepersonal', function (Blueprint $table) {
            $table->id();
            $table->string( 'comida');
            $table->string( 'cantidad');
            $table->string( 'calidad');
            $table->string( 'agua');
            $table->string( 'piso');
            $table->string( 'ventilacion');
            $table->string( 'iluminacion');
            $table->string( 'duerme');
            $table->string( 'bañodiario');
            $table->string( 'lavadomanos');
            $table->string( 'cambioderopa');
            $table->string( 'higienebucal');
            $table->string( 'infancia');
            $table->string( 'reciente');
            $table->string( 'alcoholismo');
            $table->string( 'tabaquismo');
            $table->string( 'drogadiccion');
            $table->string( 'otros');
            $table->string( 'antecedentesquirurgicos');
            $table->string( 'transfuciones');
            $table->string( 'alergias');
            $table->string( 'enfermedades');
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
        Schema::dropIfExists('antecedentepersonal');
    }
}
