<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EffectsController extends Controller
{
    // Devuelve todas los efectos
    public function index()
    {
        return Effect::all();
    }

    // Devuelve un efecto
    public function show($id)
    {
        return Effect::findOrFail($id);
    }

    // Crear un efecto
    public function store(Request $request)
    {
        $effect = Effect::create($request->all());
        return response()->json($effect, 201);
    }

    // Actualizar un efecto
    public function update(Request $request, $id)
    {
        $card = Effect::findOrFail($id);
        $card->update($request->all());
        return response()->json($effect, 200);
    }

    // Eliminar un efecto
    public function destroy($id)
    {
        Effect::destroy($id);
        return response()->json(null, 204);
    }
}
