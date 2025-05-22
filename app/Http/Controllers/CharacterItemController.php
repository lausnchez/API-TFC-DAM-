<?php

namespace App\Http\Controllers;
use App\Models\Character;
use App\Models\Item;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CharacterItemController extends Controller
{
    public function index()
    {
        return response()->json(DB::table('character_item')->get());
    }

    public function show($id)
    {
        $relation = DB::table('character_item')->where('id', $id)->first();
        if (!$relation) {
            return response()->json(null, 404);
        }
        return response()->json($relation);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_character' => 'required|exists:character_player,id',
            'id_item' => 'required|exists:items,id',
        ]);

        $id = DB::table('character_item')->insertGetId([
            'id_character' => $validated['id_character'],
            'id_item' => $validated['id_item'],
        ]);

        return response()->json(['id' => $id], 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_item' => 'required|exists:items,id',
            'id_character' => 'required|exists:character_player,id',
        ]);

        $characterItem = CharacterItem::findOrFail($id);
        $characterItem->update($validated);

        return response()->json($characterItem, 200);
    }


    public function destroy($id)
    {
        $deleted = DB::table('character_item')->where('id', $id)->delete();
        if (!$deleted) {
            return response()->json(null, 404);
        }
        return response()->json(null, 204);
    }
}
