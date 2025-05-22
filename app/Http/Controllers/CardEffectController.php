<?php

namespace App\Http\Controllers;
use App\Models\Card;
use App\Models\Effect;
use App\Models\CardEffect;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardEffectController extends Controller
{
    public function index()
    {
        return response()->json(DB::table('card_effect')->get());
    }

    public function show($id)
    {
        $relation = DB::table('card_effect')->where('id', $id)->first();
        if (!$relation) {
            return response()->json(null, 404);
        }
        return response()->json($relation);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_card' => 'required|exists:cards,id',
            'id_effect' => 'required|exists:effects,id',
        ]);

        $id = DB::table('card_effect')->insertGetId([
            'id_card' => $validated['id_card'],
            'id_effect' => $validated['id_effect']
        ]);

        return response()->json(['id' => $id], 201);
    }

    public function destroy($id)
    {
        $deleted = DB::table('card_effect')->where('id', $id)->delete();
        if (!$deleted) {
            return response()->json(null, 404);
        }
        return response()->json(null, 204);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_card' => 'exists:cards,id',
            'id_effect' => 'exists:effects,id',
        ]);

        $updated = DB::table('card_effect')->where('id', $id)->update($validated);

        if (!$updated) {
            return response()->json(null, 404);
        }

        return response()->json(null, 204);
    }
}
