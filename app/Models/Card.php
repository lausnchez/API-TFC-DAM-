<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'cards';
    
    protected $casts = [
        'cost'=>'int',
        'currency_cost'=>'int',
        'rarity'=>'float'
    ];

    protected $fillable = [
        'name',
        'description',
        'cost',
        'currency_cost',
        'image',
        'target',
        'rarity'
    ];

    // CARD _EFFECT
    public function effects()
    {
        return $this->belongsToMany(
            Effect::class,
            'card_effect',
            'id_card',
            'id_effect'
        );
    }

    // CHARACTER_PLAYER
    public function characters()
    {
        return $this->belongsToMany(
            CharacterPlayer::class,
            'character_card',
            'id_card',
            'id_character'
        );
    }

    // OBTAIN FUSIONS
    public function fusiones()
    {
        return CardFusion::where(function($query) {
            $query->where('card1', $this->id)
                ->orWhere('card2', $this->id);
        })
        ->get()
        ->unique(function ($fusion) {
            // Usamos sort para evitar combinaciones duplicadas tipo A+B y B+A
            return collect([$fusion->card1, $fusion->card2])->sort()->values()->toJson();
        });
    }
}
