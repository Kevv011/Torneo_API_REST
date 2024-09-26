<?php
use App\Http\Controllers\EquipoController;    //Agregamos el controlador de equipos
use App\Http\Controllers\JugadorController;   //Agregamos el controlador de jugadores
use App\Http\Controllers\PartidoController;   //Agregamos el controlador de partidos
use App\Http\Controllers\ResultadoController; //Agregamos el controlador de resultados

Route::apiResource('equipos', EquipoController::class);        //Agregamos la ruta de equipos
Route::apiResource('jugadors', JugadorController::class);     //Agregamos la ruta de jugadores
Route::apiResource('partidos', PartidoController::class);      //Agregamos la ruta de partidos
Route::apiResource('resultados', ResultadoController::class);  //Agregamos la ruta de resultados
