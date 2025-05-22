<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CardController;
use App\Http\Controllers\EffectController;
use App\Http\Controllers\EnemyController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CharacterController;

use App\Http\Controllers\CardEffectController;
use App\Http\Controllers\CardFusionController;
use App\Http\Controllers\CharacterCardController;
use App\Http\Controllers\CharacterItemController;
use App\Http\Controllers\EnemyAbilitiesController;
use App\Http\Controllers\ItemEffectController;
use App\Http\Controllers\ItemFusionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// RUTAS PRINCIPALES
//----------------------------------------------------------------------------------------
// Cards
Route::get('/card', [CardController::class, 'index']);
Route::get('/card/{id}', [CardController::class, 'show']);
Route::post('/card', [CardController::class, 'store']);
Route::put('/card/{id}', [CardController::class, 'update']);
Route::delete('/card/{id}', [CardController::class, 'destroy']);
Route::patch('/card/{id}', [CardController::class, 'update']); // cambios parciales

// Effects
Route::get('/effect', [EffectController::class, 'index']);
Route::get('/effect/{id}', [EffectController::class, 'show']);
Route::post('/effect', [EffectController::class, 'store']);
Route::put('/effect/{id}', [EffectController::class, 'update']);
Route::delete('/effect/{id}', [EffectController::class, 'destroy']);
Route::patch('/effect/{id}', [EffectController::class, 'update']); // opcional

// Items
Route::get('/item', [ItemController::class, 'index']);
Route::get('/item/{id}', [ItemController::class, 'show']);
Route::post('/item', [ItemController::class, 'store']);
Route::put('/item/{id}', [ItemController::class, 'update']);
Route::delete('/item/{id}', [ItemController::class, 'destroy']);
Route::patch('/item/{id}', [ItemController::class, 'update']); // opcional

// Character_Player
Route::get('/character', [CharacterController::class, 'index']);
Route::get('/character/{id}', [CharacterController::class, 'show']);
Route::post('/character', [CharacterController::class, 'store']);
Route::put('/character/{id}', [CharacterController::class, 'update']);
Route::delete('/character/{id}', [CharacterController::class, 'destroy']);
Route::patch('/character/{id}', [CharacterController::class, 'update']); // opcional

// Enemies
Route::get('/enemy', [EnemyController::class, 'index']);
Route::post('/enemy', [EnemyController::class, 'store']);
Route::get('/enemy/{id}', [EnemyController::class, 'show']);
Route::put('/enemy/{id}', [EnemyController::class, 'update']);
Route::patch('/enemy/{id}', [EnemyController::class, 'update']); // opcional
Route::delete('/enemy/{id}', [EnemyController::class, 'destroy']);

// RUTAS SECUNDARIAS
//----------------------------------------------------------------------------------------
// CardEffect
Route::get('/card-effect', [CardEffectController::class, 'index']);
Route::post('/card-effect', [CardEffectController::class, 'store']);
Route::get('/card-effect/{id}', [CardEffectController::class, 'show']);
Route::put('/card-effect/{id}', [CardEffectController::class, 'update']);
Route::patch('/card-effect/{id}', [CardEffectController::class, 'update']);
Route::delete('/card-effect/{id}', [CardEffectController::class, 'destroy']);

// CardFusion
Route::get('/card-fusion', [CardFusionController::class, 'index']);
Route::post('/card-fusion', [CardFusionController::class, 'store']);
Route::get('/card-fusion/{id}', [CardFusionController::class, 'show']);
Route::put('/card-fusion/{id}', [CardFusionController::class, 'update']);
Route::patch('/card-fusion/{id}', [CardFusionController::class, 'update']);
Route::delete('/card-fusion/{id}', [CardFusionController::class, 'destroy']);

// CharacterCard
Route::get('/character-card', [CharacterCardController::class, 'index']);
Route::post('/character-card', [CharacterCardController::class, 'store']);
Route::get('/character-card/{id}', [CharacterCardController::class, 'show']);
Route::delete('/character-card/{id}', [CharacterCardController::class, 'destroy']);

// CharacterItem
Route::get('/character-item', [CharacterItemController::class, 'index']);
Route::post('/character-item', [CharacterItemController::class, 'store']);
Route::get('/character-item/{id}', [CharacterItemController::class, 'show']);
Route::delete('/character-item/{id}', [CharacterItemController::class, 'destroy']);
Route::patch('/character-item/{id}', [CharacterItemController::class, 'update']);

// EnemyAbilities
Route::get('/enemy-ability', [EnemyAbilitiesController::class, 'index']);
Route::post('/enemy-ability', [EnemyAbilitiesController::class, 'store']);
Route::get('/enemy-ability/{id}', [EnemyAbilitiesController::class, 'show']);
Route::delete('/enemy-ability/{id}', [EnemyAbilitiesController::class, 'destroy']);
Route::patch('/enemy-ability/{id}', [EnemyAbilitiesController::class, 'update']);

// ItemEffect
Route::get('/item-effect', [ItemEffectController::class, 'index']);
Route::post('/item-effect', [ItemEffectController::class, 'store']);
Route::get('/item-effect/{id}', [ItemEffectController::class, 'show']);
Route::delete('/item-effect/{id}', [ItemEffectController::class, 'destroy']);
Route::patch('/item-effect/{id}', [ItemEffectController::class, 'update']);

// ItemFusion
Route::get('/item-fusion', [ItemFusionController::class, 'index']);
Route::post('/item-fusion', [ItemFusionController::class, 'store']);
Route::get('/item-fusion/{id}', [ItemFusionController::class, 'show']);
Route::put('/item-fusion/{id}', [ItemFusionController::class, 'update']);
Route::patch('/item-fusion/{id}', [ItemFusionController::class, 'update']);
Route::delete('/item-fusion/{id}', [ItemFusionController::class, 'destroy']);