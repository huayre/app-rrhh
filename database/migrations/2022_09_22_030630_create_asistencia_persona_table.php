<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciaPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia_persona', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->unsignedBigInteger('asistencia_id')->nullable();
            $table->timestamps();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('asistencia_id')->references('id')->on('asistencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencia_persona');
    }
}
