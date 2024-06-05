<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'eatery_id',
        'reviewer',
        'content',
        'rating',
        'image_link',
        'like',
        'dislike',
    ];

    public function eatery()
    {
        return $this->belongsTo(Eatery::class);
    }
}
