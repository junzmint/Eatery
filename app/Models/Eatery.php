<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eatery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'rating',
    ];

    public function foodDrinks()
    {
        return $this->belongsToMany(FoodDrink::class, 'menu');
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
