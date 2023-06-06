<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ReviewController extends Controller
{
    /**
     * Returns a list of reviews for a movie
     */
    public function index(Request $request, Movie $movie): JsonResponse
    {
        /**
         * Your implementation here
         */
    }

    /**
     * Stores a movie review in the database
     */
    public function store(Request $request, Movie $movie)
    {
        /**
         * Your implementation here
         */
    }

    /**
     * Returns a single review
     */
    public function show(Review $review): JsonResponse
    {
        /**
         * Your implementation here
         */
    }

    /**
     * Updates a review
     */
    public function update(Request $request, Review $review)
    {
        /**
         * Your implementation here
         */
    }

    /**
     * Deletes a review
     */
    public function destroy(Review $review)
    {
        /**
         * Your implementation here
         */
    }
}
