<?php

use App\Http\Controllers\FoodDrinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EateryController;
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

Route::get('eateries/all', [EateryController::class, 'index'])->name('eateries.index');

Route::get('eateries/highest_ratings', [EateryController::class, 'topRated'])->name('eateries.topRated');

Route::get('/eateries/user_favourite', [EateryController::class, 'getFavouriteEateries'])->name('eateries.user_favourite');