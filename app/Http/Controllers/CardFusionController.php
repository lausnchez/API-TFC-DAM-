<?php

namespace App\Http\Controllers;
use App\Models\Card;
use App\Models\CardFusion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardFusionController extends Controller
{
    public function index()
    {
        return response()->json(DB::table('card_fusion')->get());
    }

    public function show($id)
    {
        $fusion = DB::table('card_fusion')->where('id', $id)->first();
        if (!$fusion) {
            return response()->json(null, 404);
        }
        return response()->json($fusion);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'card1' => 'required|exists:cards,id',
            'card2' => 'required|exists:cards,id',
            'card_result' => 'required|exists:cards,id',
        ]);

        $id = DB::table('card_fusion')->insertGetId([
            'card1' => $validated['card1'],
            'card2' => $validated['card2'],
            'card_result' => $validated['card_result'],
        ]);

        return response()->json(['id' => $id], 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'card1' => 'exists:cards,id',
            'card2' => 'exists:cards,id',
            'card_result' => 'exists:cards,id',
        ]);

        $updated = DB::table('card_fusion')->where('id', $id)->update($validated);

        if (!$updated) {
            return response()->json(null, 404);
        }

        return response()->json(null, 204);
    }

    public function destroy($id)
    {
        $deleted = DB::table('card_fusion')->where('id', $id)->delete();
        if (!$deleted) {
            return response()->json(null, 404);
        }
        return response()->json(null, 204);
    }
}
