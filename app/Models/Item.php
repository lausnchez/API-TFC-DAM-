<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    
    protected $casts = [
        'currency_cost' => 'int',
        'rarity' => 'float'
    ];
    
    protected $fillable = [
        'name',
        'description',
        'currency_cost',
        'rarity'
    ];

    public function characters()
    {
        return $this->belongsToMany(
            CharacterPlayer::class,
            'character_item',
            'id_item',
            'id_character'
        );
    }

    public function effects()
    {
        return $this->belongsToMany(
            Effect::class,
            'item_effect',
            'id_item',
            'id_effect'
        );
    }

    public function fusiones()
    {
        return ItemFusion::where(function($query) {
            $query->where('item1', $this->id)
                ->orWhere('item2', $this->id);
        })
        ->get()
        ->unique(function ($fusion) {
            return collect([$fusion->item1, $fusion->item2])->sort()->values()->toJson();
        });
    }
}
