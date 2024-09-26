<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('equipos', function (Blueprint $table) {
            $table->string('nombre'); // Agregar campo 'nombre' 
            $table->string('coach');  // Agregar campo 'coach' 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('equipos', function (Blueprint $table) {
            $table->string('nombre'); // Agregar campo 'nombre' 
            $table->string('coach');  // Agregar campo 'coach'
        });
    }
};
