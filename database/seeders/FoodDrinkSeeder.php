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
            ['name' => 'Cơm thố', 'type' => 'food'],
            ['name' => 'Bún bò Huế', 'type' => 'food'],
            ['name' => 'Mì Quảng', 'type' => 'food'],
            ['name' => 'Bánh xèo', 'type' => 'food'],
            ['name' => 'Bánh cam', 'type' => 'food'],
            ['name' => 'Bánh chưng', 'type' => 'food'],
            ['name' => 'Nem rán', 'type' => 'food'],
            ['name' => 'Kimbap', 'type' => 'food'],
            ['name' => 'Canh chua', 'type' => 'food'],
            ['name' => 'Thịt kho tàu', 'type' => 'food'],
            ['name' => 'Lẩu', 'type' => 'food'],
            ['name' => 'Trà sữa', 'type' => 'drink'],
            ['name' => 'Cà phê', 'type' => 'drink'],
            ['name' => 'Trà', 'type' => 'drink'],
            ['name' => 'Freeze', 'type' => 'drink'],
            ['name' => 'Sinh tố', 'type' => 'drink'],
            ['name' => 'Wine', 'type' => 'drink'],
            ['name' => 'Latte', 'type' => 'drink'],
        ]);
    }
}
