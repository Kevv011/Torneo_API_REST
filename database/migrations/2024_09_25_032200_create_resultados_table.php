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
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partido_id'); //Agregamos la clave foránea
            $table->foreign('partido_id')->references('id')->on('partidos')->onDelete('cascade'); //Agregamos la relación desde tabla partidos
            $table->integer('goles_local');     //Agregamos el campo goles_local
            $table->integer('goles_visitante'); //Agregamos el campo goles_visitante
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados');
    }
};
