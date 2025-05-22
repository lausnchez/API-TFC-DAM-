<?php

namespace App\Http\Controllers;

use App\Models\Effect;
use Illuminate\Http\Request;

class EffectController extends Controller
{
    public function index()
    {
        return Effect::all();
    }

    public function show($id)
    {
        $effect = Effect::findOrFail($id);
        return response()->json($effect);
    }

    public function store(Request $request)
    {
        $effect = Effect::create($request->only([
            'name',
            'description',
            'active_turns',
            'value'
        ]));

        return response()->json($effect, 201);
    }

    public function update(Request $request, $id)
    {
        $effect = Effect::findOrFail($id);
        $effect->update($request->only([
            'name',
            'description',
            'active_turns',
            'value'
        ]));

        return response()->json($effect);
    }

    public function destroy($id)
    {
        $effect = Effect::findOrFail($id);
        $effect->delete();

        return response()->json(null, 204);
    }
}
