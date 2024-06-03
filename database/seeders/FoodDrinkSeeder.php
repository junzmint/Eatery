<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FoodDrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('food_drinks')->insert([
            ['name' => 'Phở bò', 'type' => 'food'],
            ['name' => 'Bún chả', 'type' => 'food'],
            ['name' => 'Gỏi cuốn', 'type' => 'food'],
            ['name' => 'Bánh mì', 'type' => 'food'],
            ['name' => 'Cơm tấm', 'type' => 'food'],
            ['name' => 'Bún bò Huế', 'type' => 'food'],
            ['name' => 'Cao lầu', 'type' => 'food'],
            ['name' => 'Mì Quảng', 'type' => 'food'],
            ['name' => 'Bánh xèo', 'type' => 'food'],
            ['name' => 'Trà sữa', 'type' => 'drink'],
            ['name' => 'Cà phê', 'type' => 'drink'],
            ['name' => 'Nước mía', 'type' => 'drink'],
            ['name' => 'Bánh cam', 'type' => 'food'],
            ['name' => 'Bánh chưng', 'type' => 'food'],
            ['name' => 'Nem rán/Chả giò', 'type' => 'food'],
            ['name' => 'Gỏi đu đủ', 'type' => 'food'],
            ['name' => 'Canh chua', 'type' => 'food'],
            ['name' => 'Thịt kho tàu', 'type' => 'food'],
            ['name' => 'Cá kho tộ', 'type' => 'food'],
            ['name' => 'Lẩu', 'type' => 'food'],
        ]);
    }
}
