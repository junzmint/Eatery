<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodDrink extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'type',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'favourites');
    }

    public function eateries()
    {
        return $this->belongsToMany(Eatery::class, 'menu');
    }
}
