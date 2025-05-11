<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardFusionController extends Controller
{
    // Devuelve todas fusiones
    public function index()
    {
        return CardFusion::all();
    }

    // Devuelve una fusión
    public function show($id)
    {
        return CardFusion::findOrFail($id);
    }

    // Crear una fusión
    public function store(Request $request)
    {
        $card_fusion = CardFusion::create($request->all());
        return response()->json($card_fusion, 201);
    }

    // Actualizar una fusión
    public function update(Request $request, $id)
    {
        $card_fusion = CardFusion::findOrFail($id);
        $card_fusion->update($request->all());
        return response()->json($card_fusion, 200);
    }

    // Eliminar una fusión
    public function destroy($id)
    {
        CardFusion::destroy($id);
        return response()->json(null, 204);
    }
}
