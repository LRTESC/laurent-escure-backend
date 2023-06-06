<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['author', 'body'];

    /**
     * Get the movie for which the review was written
     */
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
