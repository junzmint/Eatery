<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
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
     * Update the like or dislike count for a review.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $review_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateReviewCount(Request $request, $review_id)
    {
        $type = $request->query('type');

        // Find the review
        $review = Review::find($review_id);
        if (!$review) {
            return response()->json(['error' => 'Review not found'], 404);
        }

        // Update like or dislike count
        if ($type == 'like') {
            $review->increment('like');
        } elseif ($type == 'dislike') {
            $review->increment('dislike');
        } else {
            return response()->json(['error' => 'Invalid type'], 400);
        }

        return response()->json(['message' => 'Review updated successfully', 'review' => $review]);
    }
}
