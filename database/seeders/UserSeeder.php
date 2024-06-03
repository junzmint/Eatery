<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seed test user
        DB::table('users')->insert([
            'name' => 'Eatery',
            'email' => 'eatery@example.com',
            'password' => Hash::make('password'),
        ]);

        // seed fake user
        User::factory(10)->create();
    }
}
