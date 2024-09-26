<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    use HasFactory;

    protected $table = "equipos"; 

    protected $fillable = ["nombre", "coach"]; //Campos que pueden agregarse datos de manera
}
