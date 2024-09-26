<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resultados; //Agregamos el modelo de resultados

class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Resultados::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $resultado = Resultados::create($request->all());
        return response()->json($resultado, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Resultados $resultado)
    {
        return $resultado;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resultados $resultado)
    {
        $resultado->update($request->all());
        return response()->json($resultado, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resultados $resultado)
    {
        $resultado->delete();
        return response()->json(null, 204);
    }
}
