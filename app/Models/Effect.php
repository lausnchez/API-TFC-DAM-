<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Effect extends Model
{
    protected $table = 'effects';
    public $timestamps = false;
    
    protected $casts = [
        'active_turns' => 'int',
        'value' => 'int'
    ];

    protected $fillable = [
        'name',
        'description',
        'active_turns',
        'value'
    ];

    // CARD_EFFECT
    public function cards()
    {
        return $this->belongsToMany(
            Card::class,
            'card_effect',
            'id_effect',
            'id_card'
        );
    }

    // ENEMY_ABILITIES
    public function enemies()
    {
        return $this->belongsToMany(
            Enemy::class,
            'enemy_abilities',
            'id_effect',
            'id_enemy'
        );
    }

    // ITEM_EFFECT
    public function items()
    {
        return $this->belongsToMany(
            Item::class,
            'item_effect',
            'id_effect',
            'id_item'
        );
    }
}
