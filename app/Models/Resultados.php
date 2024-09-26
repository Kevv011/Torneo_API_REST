<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultados extends Model
{
    use HasFactory;

    protected $table = "resultados"; //Nombre de la tabla en la base de datos

    protected $fillable = ["partido_id", "goles_local", "goles_visitante"]; //Campos que pueden agregarse datos de manera masiva
}
