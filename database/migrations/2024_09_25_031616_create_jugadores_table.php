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
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre');    //Agregamos el campo nombre
            $table->string('posicion');  //Agregamos el campo posicion
            $table->integer('dorsal');   //Agregamos el campo dorsal
            $table->unsignedBigInteger('equipo_id');  //Agregamos la clave foránea
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade'); //Agregamos la relación
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadores');
    }
};
