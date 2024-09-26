<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipo_local_id');      //Agregamos la clave foránea
            $table->unsignedBigInteger('equipo_visitante_id'); //Agregamos la clave foránea
            $table->foreign('equipo_local_id')->references('id')->on('equipos')->onDelete('cascade');     //Agregamos la relación desde tabla equipos
            $table->foreign('equipo_visitante_id')->references('id')->on('equipos')->onDelete('cascade'); //Agregamos la relación desde tabla equipos
            $table->date('fecha'); //Agregamos el campo fecha
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
