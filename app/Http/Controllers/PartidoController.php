<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partidos; //Agregamos el modelo de partidos

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Partidos::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $partido = Partidos::create($request->all());
        return response()->json($partido, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Partidos $partido)
    {
        return $partido;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partidos $partido)
    {
        $partido->update($request->all());
        return response()->json($partido, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partidos $partido)
    {
        $partido->delete();
        return response()->json(null, 204);
    }
}
