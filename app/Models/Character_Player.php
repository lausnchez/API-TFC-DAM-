<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character_Player extends Model
{
    protected $table = 'character_player';
    public $timestamps = false;

    protected $casts = [
        'health' => 'int',
        'stamina' => 'int',
        'max_items' => 'int'
    ];

    protected $fillable = [
        'name',
        'health',
        'currency',
        'stamina',
        'max_items',
        'sprite'
    ];

    // CHARACTER_CARD
    public function cards()
    {
        return $this->belongsToMany(
            Card::class,
            'character_card',
            'id_character',
            'id_card'
        );
    }

    // CHARACTER_ITEM
    public function items()
    {
        return $this->belongsToMany(
            Item::class,
            'character_item',
            'id_character',
            'id_item'
        );
    }
}
