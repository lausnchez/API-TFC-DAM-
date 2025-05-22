<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemFusion extends Model
{
    protected $table = 'item_fusion';
    public $timestamps = false;

    protected $casts = [
        'item1'=>'int',
        'item2'=>'int',
        'item_fusion'=>'int'
    ];

    protected $fillable = [
        'item1',
        'item2',
        'item_fusion'
    ];

    public function result()
    {
        return $this->belongsTo(
            Item::class,
            'item_fusion'
        );
    }

    public function item1()
    {
        return $this->belongsTo(
            Item::class,
            'item1'
        );
    }

    public function item2()
    {
        return $this->belongsTo(
            Item::class,
            'item2'
        );
    }
}