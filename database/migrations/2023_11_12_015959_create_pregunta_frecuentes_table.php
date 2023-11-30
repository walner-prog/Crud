<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntaFrecuentesTable extends Migration
{
    public function up()
    {
        Schema::create('pregunta_frecuentes', function (Blueprint $table) {
            $table->id();
            $table->string('pregunta');
            $table->text('respuesta');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pregunta_frecuentes');
    }
}
