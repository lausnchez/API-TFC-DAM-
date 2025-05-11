<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CardController;

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

// Cards
Route::get('/cards', [CardController::class, 'index']);
Route::get('/cards/{id}', [CardController::class, 'show']);
Route::post('/cards', [CardController::class, 'store']);
Route::put('/cards/{id}', [CardController::class, 'update']);
Route::delete('/cards/{id}', [CardController::class, 'destroy']);

// Effects
Route::get('/effects', [EffectController::class, 'index']);
Route::get('/effects/{id}', [EffectController::class, 'show']);
Route::post('/effects', [EffectController::class, 'store']);
Route::put('/effects/{id}', [EffectController::class, 'update']);
Route::delete('/effects/{id}', [EffectController::class, 'destroy']);

// Items
Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/{id}', [ItemController::class, 'show']);
Route::post('/items', [ItemController::class, 'store']);
Route::put('/items/{id}', [ItemController::class, 'update']);
Route::delete('/items/{id}', [ItemController::class, 'destroy']);

// Character_Player
Route::get('/characters', [CharacterController::class, 'index']);
Route::get('/character/{id}', [CharacterController::class, 'show']);
Route::post('/character', [CharacterController::class, 'store']);
Route::put('/character/{id}', [CharacterController::class, 'update']);
Route::delete('/character/{id}', [CharacterController::class, 'destroy']);