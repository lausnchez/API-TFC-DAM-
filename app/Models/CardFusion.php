<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardFusion extends Model
{
    protected $table = 'card_fusion';
    public $timestamps = false;

    protected $casts = [
        'card1' => 'int',
        'card2' => 'int',
        'card_result' => 'int'
    ];

    protected $fillable = [
        'card1',
        'card2',
        'card_result'
    ];

    public function card1()
    {
        return $this->belongsTo(
            Card::class,
            'card1'
        );
    }

    public function card2()
    {
        return $this->belongsTo(
            Card::class,
            'card2'
        );
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'card1' => 'sometimes|exists:cards,id',
            'card2' => 'sometimes|exists:cards,id',
            'card_result' => 'sometimes|exists:cards,id',
        ]);

        // Actualiza solo los campos que se envían en la petición
        DB::table('card_fusion')->where('id', $id)->update($validated);
        return response()->json(none, 200);
    }


    public function result()
    {
        return $this->belongsTo(
            Card::class,
            'card_result'
        );
    }
}