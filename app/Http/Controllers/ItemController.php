<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Devuelve todas los Items
    public function index()
    {
        return Item::all();
    }

    // Devuelve un Item
    public function show($id)
    {
        return Item::findOrFail($id);
    }

    // Crear un Item
    public function store(Request $request)
    {
        $item= Item::create($request->all());
        return response()->json($item, 201);
    }

    // Actualizar un Item
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());
        return response()->json($item, 200);
    }

    // Eliminar un Item
    public function destroy($id)
    {
        Item::destroy($id);
        return response()->json(null, 204);
    }
}
