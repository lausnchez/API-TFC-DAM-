<?php

namespace App\Http\Controllers;
use App\Models\Character_Player;

use Illuminate\Http\Request;

class CharacterController extends Controller
{
    // Devuelve todas los Characters
    public function index()
    {
        return Character_Player::all();
    }

    // Devuelve un Character
    public function show($id)
    {
        return Character_Player::findOrFail($id);
    }

    // Crear un Character
    public function store(Request $request)
    {
        $character_player = Character_Player::create($request->all());
        return response()->json($character_player, 201);
    }

    // Actualizar un Character
    public function update(Request $request, $id)
    {
        $character_player = Character_Player::findOrFail($id);
        $character_player->update($request->all());
        return response()->json($character_player, 200);
    }

    // Eliminar un Character
    public function destroy($id)
    {
        Character_Player::destroy($id);
        return response()->json(null, 204);
    }
}
