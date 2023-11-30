<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriaFotosTable extends Migration
{
    public function up()
    {
        Schema::create('galeria_fotos', function (Blueprint $table) {
            $table->id();
            $table->string('imagen_url');
            $table->unsignedBigInteger('sitio_turistico_id');
            $table->foreign('sitio_turistico_id')->references('id')->on('sitio_turisticos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galeria_fotos');
    }
}
