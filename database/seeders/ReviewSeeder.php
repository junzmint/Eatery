<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Eatery;
use App\Models\Review;
use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $eateries = Eatery::all();

        foreach ($eateries as $eatery) {
            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <= 5; $j++) {
                    Review::create([
                        'eatery_id' => $eatery->id,
                        'reviewer' => $faker->name,
                        'rating' => $i,
                        'content' => $faker->paragraph,
                        'image_link' => $faker->imageUrl(),
                        'like' => $faker->numberBetween(0, 100),
                        'dislike' => $faker->numberBetween(0, 100),
                    ]);
                }
            }
        }
    }
}
