<?php

namespace App\Http\Controllers;
use App\Models\Card;

use Illuminate\Http\Request;

class CardController extends Controller
{
    // Devuelve todas las cartas
    public function index()
    {
        $cards = Card::with('effects')->get();
        return response()->json($cards);
    }

    // Devuelve una carta
    public function show($id)
    {
        return Card::findOrFail($id);
    }

    // Crear una carta
    public function store(Request $request)
    {
        $card = Card::create($request->all());
        return response()->json($card, 201);
    }

    // Actualizar una carta
    public function update(Request $request, $id)
    {
        $card = Card::findOrFail($id);
        $card->update($request->all());
        return response()->json($card, 200);
    }

    // Eliminar una carta
    public function destroy($id)
    {
        Card::destroy($id);
        return response()->json(null, 204);
    }
}
