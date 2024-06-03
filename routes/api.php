<?php

use App\Http\Controllers\FoodDrinkController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, World!!']);
});

Route::get('food_drinks', [FoodDrinkController::class, 'index'])->name('food_drinks.index');

Route::post('users/profile', [UserController::class, 'profile'])->name('users.profile');
