<?php

namespace App\Console\Commands;

use App\Models\Movie;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchMovies extends Command
{
    protected $signature = 'movies:fetch';

    protected $description = 'Fetches movies from an external API and inserts them in the database.';

    public function handle(): int
    {
        $url = "http://localhost:3000/api/movies";

        $response = Http::get($url);

        if ($response->ok() && isset($response['data'])) {
            $movies = $response['data'];

            foreach($movies as $movie) {
                Movie::firstOrCreate([
                    'title' => $movie['title'],
                    'year' => $movie['year'],
                    'poster' => $movie['poster'],
                ]);
            }
        }

        $numberOfMovies = Movie::count();

        return $numberOfMovies;
    }
}
