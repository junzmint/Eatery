<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eatery;
use App\Models\User;

class EateryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Eatery::with('foodDrinks')->with('media')->get();
    }

    /**
     * Display a listing of the highest rating resource.
     */
    public function topRated()
    {
        return Eatery::with('foodDrinks')->with('media')->orderBy('rating', 'desc')->take(5)->get();;
    }

    /**
     * Get a list of eateries that have the food and drinks liked by the user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getFavouriteEateries(Request $request)
    {
        $userId = $request->header('user-id');

        // Find the user
        $user = User::find($userId);
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Get the user's favourite food and drinks
        $favouriteFoodDrinks = $user->favourites()->pluck('food_drinks.id');

        // Get the eateries that have these food and drinks
        $eateries = Eatery::whereHas('foodDrinks', function ($query) use ($favouriteFoodDrinks) {
            $query->whereIn('food_drinks.id', $favouriteFoodDrinks);
        })->with('foodDrinks')->with('media')->get();

        return response()->json($eateries);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eatery = Eatery::with(['foodDrinks', 'media', 'reviews'])->find($id);

        if (!$eatery) {
            return response()->json(['error' => 'Eatery not found'], 404);
        }

        return response()->json($eatery);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
