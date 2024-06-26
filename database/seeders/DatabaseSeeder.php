<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(FoodDrinkSeeder::class);
        $this->call(FavouriteSeeder::class);
        $this->call(EaterySeeder::class);
        $this->call(MediaSeeder::class);
        $this->call(ReviewSeeder::class);
    }
}
