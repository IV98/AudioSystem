<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tblSongs', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('artista', 50);
            $table->string('album', 100);
            $table->string('anio', 4);
            $table->integer('idGenero');
            $table->boolean('favorito');
            $table->string('url', 300);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblSongs');
    }
};
