<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\CardFusion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemFusionController extends Controller
{
    public function index()
    {
        return response()->json(DB::table('item_fusion')->get());
    }

    public function show($id)
    {
        $fusion = DB::table('item_fusion')->where('id', $id)->first();
        if (!$fusion) {
            return response()->json(null, 404);
        }
        return response()->json($fusion);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'item1' => 'required|exists:items,id',
            'item2' => 'required|exists:items,id',
            'item_fusion' => 'required|exists:items,id',
        ]);

        $id = DB::table('item_fusion')->insertGetId([
            'item1' => $validated['item1'],
            'item2' => $validated['item2'],
            'item_fusion' => $validated['item_fusion'],
        ]);

        return response()->json(['id' => $id], 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'item1' => 'exists:items,id',
            'item2' => 'exists:items,id',
            'item_fusion' => 'exists:items,id',
        ]);

        $updated = DB::table('item_fusion')->where('id', $id)->update($validated);

        if (!$updated) {
            return response()->json(null, 404);
        }

        return response()->json(null, 204);
    }

    public function destroy($id)
    {
        $deleted = DB::table('item_fusion')->where('id', $id)->delete();
        if (!$deleted) {
            return response()->json(null, 404);
        }
        return response()->json(null, 204);
    }
}
