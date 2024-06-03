<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'type',
        'eatery_id',
        'food_drink_id',
    ];

    public function eatery()
    {
        return $this->belongsTo(Eatery::class);
    }
}
