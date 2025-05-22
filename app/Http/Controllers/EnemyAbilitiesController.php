<?php

namespace App\Http\Controllers;

use App\Models\Enemy;
use App\Models\Effect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnemyAbilitiesController extends Controller
{
    public function index()
    {
        return response()->json(DB::table('enemy_abilities')->get());
    }

    public function show($id)
    {
        $relation = DB::table('enemy_abilities')->where('id', $id)->first();
        if (!$relation) {
            return response()->json(null, 404);
        }
        return response()->json($relation);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_enemy' => 'required|exists:enemies,id',
            'id_effect' => 'required|exists:effects,id',
        ]);

        $id = DB::table('enemy_abilities')->insertGetId([
            'id_enemy' => $validated['id_enemy'],
            'id_effect' => $validated['id_effect'],
        ]);

        return response()->json(['id' => $id], 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_enemy' => 'required|exists:enemies,id',
            'id_effect' => 'required|exists:effects,id',
        ]);

        $updated = DB::table('enemy_abilities')->where('id', $id)->update([
            'id_enemy' => $validated['id_enemy'],
            'id_effect' => $validated['id_effect'],
        ]);

        if (!$updated) {
            return response()->json(null, 404);
        }

        $relation = DB::table('enemy_abilities')->where('id', $id)->first();
        return response()->json($relation, 200);
    }


    public function destroy($id)
    {
        $deleted = DB::table('enemy_abilities')->where('id', $id)->delete();
        if (!$deleted) {
            return response()->json(null, 404);
        }
        return response()->json(null, 204);
    }
}
