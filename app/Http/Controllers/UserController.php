<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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

    /**
     * Create a new user profile for the specified favorite food and drinks.
     */
    public function profile(Request $request)
    {
        $userId = $request->header('user-id');
        $favourites = $request->input('favourites', []);

        // Validate user ID
        if (!$userId || !is_numeric($userId)) {
            return response()->json(['error' => 'Invalid user ID'], 400);
        }

        // Validate favourites
        if (!is_array($favourites)) {
            return response()->json(['error' => 'Invalid favourites format'], 400);
        }

        // Find the user
        $user = User::find($userId);
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Sync favourites
        $user->favourites()->sync($favourites);

        return response()->json(['message' => 'Profile updated successfully']);
    }
}
