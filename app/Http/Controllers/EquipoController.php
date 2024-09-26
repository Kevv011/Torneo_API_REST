<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipos; //Agregamos el modelo de equipos

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Equipos::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $equipo = Equipos::create($request->all());
        return response()->json($equipo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipos $equipo)
    {
        return $equipo;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipos $equipo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'coach' => 'required|string|max:255',
        ]);

        $equipo->update($request->only(['nombre', 'coach']));
        return response()->json($equipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipos $equipo)
    {
        $equipo->delete();
        return response()->json(null, 204);
    }
}
    

