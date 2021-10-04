<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('num_dni',8);
            $table->string('direccion');
            $table->string('num_celular',9);
            $table->string('correo')->unique();
            $table->string('url_linkedin')->nullable();
            $table->string('url_copia_dni')->nullable();
            $table->integer('salario')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('tipo_persona')->comment('1:empleado,2:postulante');
            $table->unsignedBigInteger('area_id')->nullable();
            $table->unsignedBigInteger('vacante_id')->nullable();
            $table->timestamps();
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('vacante_id')->references('id')->on('vacantes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
