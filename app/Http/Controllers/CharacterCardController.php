<?php

namespace App\Http\Controllers;
use App\Models\Character;
use App\Models\Card;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CharacterCardController extends Controller
{
    public function index()
    {
        return response()->json(DB::table('character_card')->get());
    }

    public function show($id)
    {
        $relation = DB::table('character_card')->where('id', $id)->first();
        if (!$relation) {
            return response()->json(null, 404);
        }
        return response()->json($relation);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_character' => 'required|exists:character_player,id',
            'id_card' => 'required|exists:cards,id',
        ]);

        $id = DB::table('character_card')->insertGetId([
            'id_character' => $validated['id_character'],
            'id_card' => $validated['id_card'],
        ]);

        return response()->json(['id' => $id], 201);
    }

    public function destroy($id)
    {
        $deleted = DB::table('character_card')->where('id', $id)->delete();
        if (!$deleted) {
            return response()->json(null, 404);
        }
        return response()->json(null, 204);
    }
}
