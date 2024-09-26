<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugadores; //Agregamos el modelo de jugadores

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Jugadores::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jugador = Jugadores::create($request->all());
        return response()->json($jugador, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugadores $jugador)
    {
        return $jugador;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugadores $jugador)
    {
        $jugador->update($request->all());
        return response()->json($jugador, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugadores $jugador)
    {
        $jugador->delete();
        return response()->json(null, 204);
    }
}
