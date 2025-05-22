<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardEffect extends Model
{
    protected $table = 'card_effect';
    public $timestamps = false;

    protected $casts =  [
        'id_card' => 'int',
        'id_effect' => 'int'
    ];

    protected $fillable = [
        'id_card',
        'id_effect'
    ];

    public function card()
    {
        return $this->belongsTo(
            Card::class,
            'id_card'
        );
    }

    public function effect()
    {
        return $this->belongsTo(
            Effect::class,
            'id_effect'
        );
    }

}
