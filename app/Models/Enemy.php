<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enemy extends Model
{
    protected $table = 'enemies';

    protected $casts = [
        'health'=>'int',
        'rarity'=>'float',
        'floor'=>'int'
    ];

    protected $fillable = [
        'name',
        'health',
        'sprite',
        'rarity',
        'type',
        'floor'
    ];

    // EFFECTS - ENEMY_ABILITIES
    public function effects()
    {
        return $this->belongsToMany(
            Effect::class,
            'enemy_abilities',
            'id_enemy',
            'id_effect'
        );
    }
}
