<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugadores extends Model
{
    use HasFactory;

    protected $table = "jugadores"; //Nombre de la tabla en la base de datos

    protected $fillable = ["nombre", "posicion", "dorsal", "equipo_id"]; //Campos que pueden agregarse datos de manera masiva
}
