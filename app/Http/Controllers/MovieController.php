<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class MovieController extends Controller
{
    /**
     * Returns a list of movies
     */
    public function index(Request $request): JsonResponse
    {
        $request->validate([
            'search' => 'nullable|string',
            'perPage' => 'nullable'
        ]);

        $movies = Movie::query();

        if($request->has('search')) {
            $movies->where('title', 'like', '%' . $request->get('search') . '%');
        }

        $movies = $movies->paginate((int)$request->input('perPage', config('movies.per_page')));

        return Response::json([
            "data" => $movies->items(),
            "total" => $movies->total(),
        ], 200);
    }

    /**
     * Stores a movie in the database
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'year' => 'required|integer',
            'poster' => 'nullable|string',
        ]);

        $movie = Movie::create($request->all());

        return Response::json($movie, 200);
    }

    /**
     * Returns a single movie
     */
    public function show(Movie $movie): JsonResponse
    {
        return Response::json([
            'data' => $movie
        ], 200);
    }

    /**
     * Updates a movie
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'nullable|string',
            'year' => 'nullable|integer',
            'poster' => 'nullable|string',
        ]);

        $movie->update($request->all());

        return Response::json($movie, 200);
    }

    /**
     * Deletes a movie
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return Response::json(null, 200);
    }
}
