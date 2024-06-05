<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FavouriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = DB::table('users')->pluck('id')->toArray();
        $foodDrinkIds = DB::table('food_drinks')->pluck('id')->toArray();

        foreach ($userIds as $userId) {
            // Each user will have a random number of favourite food/drinks
            $favouritesCount = rand(1, count($foodDrinkIds));
            $favourites = array_rand(array_flip($foodDrinkIds), $favouritesCount);

            if (!is_array($favourites)) {
                $favourites = [$favourites];
            }

            foreach ($favourites as $foodDrinkId) {
                DB::table('favourites')->insert([
                    'user_id' => $userId,
                    'food_drink_id' => $foodDrinkId,
                ]);
            }
        }
    }
}
