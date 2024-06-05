<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use App\Models\Eatery;
use Illuminate\Database\Seeder;
use App\Models\FoodDrink;

class EaterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eatery::create([
            'name' => 'Phúc Long Coffee & Tea',
            'location' => '69 P. Trần Đại Nghĩa, Bách Khoa, Hai Bà Trưng, Hà Nội',
            'rating' => 5,
        ]);
        $eatery = Eatery::where('name', 'Phúc Long Coffee & Tea')->first();
        $foodDrink = FoodDrink::where('name', 'Trà sữa')->first();
        $eatery->foodDrinks()->attach($foodDrink);
        $foodDrink = FoodDrink::where('name', 'Cà phê')->first();
        $eatery->foodDrinks()->attach($foodDrink);
        $foodDrink = FoodDrink::where('name', 'Trà')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Phở 10',
            'location' => '28 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội',
            'rating' => 3.9,
        ]);
        $eatery = Eatery::where('name', 'Phở 10')->first();
        $foodDrink = FoodDrink::where('name', 'Phở bò')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Bún Chả Hàng Mành',
            'location' => '30 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội',
            'rating' => 4.8,
        ]);
        $eatery = Eatery::where('name', 'Bún Chả Hàng Mành')->first();
        $foodDrink = FoodDrink::where('name', 'Bún chả')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Gỏi cuốn ABC',
            'location' => '30 Trần Đại Nghĩa, Hai Bà Trưng, Hà Nội',
            'rating' => 2.7,
        ]);
        $eatery = Eatery::where('name', 'Gỏi cuốn ABC')->first();
        $foodDrink = FoodDrink::where('name', 'Gỏi cuốn')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Bánh mì Oishii',
            'location' => '40 Trần Đại Nghĩa, Hai Bà Trưng, Hà Nội',
            'rating' => 5,
        ]);
        $eatery = Eatery::where('name', 'Bánh mì Oishii')->first();
        $foodDrink = FoodDrink::where('name', 'Bánh mì')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Cơm thố Bách Khoa',
            'location' => '320 Trần Đại Nghĩa, Hai Bà Trưng, Hà Nội',
            'rating' => 4.3,
        ]);
        $eatery = Eatery::where('name', 'Cơm thố Bách Khoa')->first();
        $foodDrink = FoodDrink::where('name', 'Cơm thố')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Bún bò Huế 098',
            'location' => '423 Trần Đại Nghĩa, Hai Bà Trưng, Hà Nội',
            'rating' => 2.9,
        ]);
        $eatery = Eatery::where('name', 'Bún bò Huế 098')->first();
        $foodDrink = FoodDrink::where('name', 'Bún bò Huế')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Highlands Coffee & Tea',
            'location' => '234 P. Trần Đại Nghĩa, Bách Khoa, Hai Bà Trưng, Hà Nội',
            'rating' => 4.7,
        ]);
        $eatery = Eatery::where('name', 'Highlands Coffee & Tea')->first();
        $foodDrink = FoodDrink::where('name', 'Cà phê')->first();
        $eatery->foodDrinks()->attach($foodDrink);
        $foodDrink = FoodDrink::where('name', 'Freeze')->first();
        $eatery->foodDrinks()->attach($foodDrink);
        $foodDrink = FoodDrink::where('name', 'Latte')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Wine Bar',
            'location' => '24 P. Trần Đại Nghĩa, Bách Khoa, Hai Bà Trưng, Hà Nội',
            'rating' => 4.6,
        ]);
        $eatery = Eatery::where('name', 'Wine Bar')->first();
        $foodDrink = FoodDrink::where('name', 'Wine')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Real Cohi',
            'location' => '6 P. Trần Đại Nghĩa, Bách Khoa, Hai Bà Trưng, Hà Nội',
            'rating' => 3.0,
        ]);
        $eatery = Eatery::where('name', 'Real Cohi')->first();
        $foodDrink = FoodDrink::where('name', 'Cà phê')->first();
        $eatery->foodDrinks()->attach($foodDrink);
        $foodDrink = FoodDrink::where('name', 'Sinh tố')->first();
        $eatery->foodDrinks()->attach($foodDrink);
        $foodDrink = FoodDrink::where('name', 'Trà')->first();
        $eatery->foodDrinks()->attach($foodDrink);
        $foodDrink = FoodDrink::where('name', 'Latte')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Lẩu Nabe',
            'location' => '4 Trần Đại Nghĩa, Hai Bà Trưng, Hà Nội',
            'rating' => 3.2,
        ]);
        $eatery = Eatery::where('name', 'Lẩu Nabe')->first();
        $foodDrink = FoodDrink::where('name', 'Lẩu')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Cơm nhà làm',
            'location' => '4B4 Trần Đại Nghĩa, Hai Bà Trưng, Hà Nội',
            'rating' => 4.5,
        ]);
        $eatery = Eatery::where('name', 'Cơm nhà làm')->first();
        $foodDrink = FoodDrink::where('name', 'Thịt kho tàu')->first();
        $eatery->foodDrinks()->attach($foodDrink);
        $foodDrink = FoodDrink::where('name', 'Canh chua')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Bánh Việt Nam',
            'location' => '41W Trần Đại Nghĩa, Hai Bà Trưng, Hà Nội',
            'rating' => 2.9,
        ]);
        $eatery = Eatery::where('name', 'Bánh Việt Nam')->first();
        $foodDrink = FoodDrink::where('name', 'Bánh chưng')->first();
        $eatery->foodDrinks()->attach($foodDrink);
        $foodDrink = FoodDrink::where('name', 'Bánh cam')->first();
        $eatery->foodDrinks()->attach($foodDrink);
        $foodDrink = FoodDrink::where('name', 'Bánh xèo')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Vietnam Noddels',
            'location' => '4 Trần Đại Nghĩa, Hai Bà Trưng, Hà Nội',
            'rating' => 1.9,
        ]);
        $eatery = Eatery::where('name', 'Vietnam Noddels')->first();
        $foodDrink = FoodDrink::where('name', 'Mì Quảng')->first();
        $eatery->foodDrinks()->attach($foodDrink);
        $foodDrink = FoodDrink::where('name', 'Bún bò Huế')->first();
        $eatery->foodDrinks()->attach($foodDrink);

        Eatery::create([
            'name' => 'Ăn vặt',
            'location' => '4 Trần Đại Nghĩa, Hai Bà Trưng, Hà Nội',
            'rating' => 3.7,
        ]);
        $eatery = Eatery::where('name', 'Ăn vặt')->first();
        $foodDrink = FoodDrink::where('name', 'Nem rán')->first();
        $eatery->foodDrinks()->attach($foodDrink);
        $foodDrink = FoodDrink::where('name', 'Kimbap')->first();
        $eatery->foodDrinks()->attach($foodDrink);
    }
}
