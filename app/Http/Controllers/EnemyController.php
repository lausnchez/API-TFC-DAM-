<?php

namespace App\Http\Controllers;
use App\Models\Enemy;

use Illuminate\Http\Request;

class EnemyController extends Controller
{
    public function index() {
        $enemies = Enemy::with('effects')->get();
         return response()->json($enemies); 
    }

    public function store(Request $request) {
        return Enemy::create($request->all()); 
    }
    
    public function show($id) {
        return Enemy::findOrFail($id); 
    }

    public function update(Request $request, $id) {
        $enemy = Enemy::findOrFail($id);
        $enemy->update($request->all());
        return $enemy;
    }

    public function destroy($id) {
        Enemy::destroy($id);
        return response()->noContent(); 
    }
}
