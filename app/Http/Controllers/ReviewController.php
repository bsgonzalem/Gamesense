<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Review::with('user', 'product')->get());
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
            'date' => 'required|date',
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
        ]);

        $review = Review::create($validated);

        return response()->json($review, 201);
    }

    public function show(Review $review): JsonResponse
    {
        return response()->json($review->load('user', 'product'));
    }

    public function update(Request $request, Review $review): JsonResponse
    {
        $validated = $request->validate([
            'rating' => 'sometimes|required|integer|min:1|max:5',
            'comment' => 'nullable|string',
            'date' => 'sometimes|required|date',
        ]);

        $review->update($validated);

        return response()->json($review);
    }

    public function destroy(Review $review): JsonResponse
    {
        $review->delete();

        return response()->json(null, 204);
    }
}
