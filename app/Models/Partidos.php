<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partidos extends Model
{
    use HasFactory;

    protected $table = "partidos"; //Nombre de la tabla en la base de datos

    protected $fillable = ["equipo_local_id", "equipo_visitante_id", "fecha"]; //Campos que pueden agregarse datos de manera masiva
}
