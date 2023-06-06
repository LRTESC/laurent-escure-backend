<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/movies', [MovieController::class, 'index'] /** link this to the appropriate movie controller method */);
Route::get('/movies/{movie}', [MovieController::class, 'show'] /** link this to the appropriate movie controller method */);
Route::post('/movies', [MovieController::class, 'store']/** link this to the appropriate movie controller method */);
Route::patch('/movies/{movie}', [MovieController::class, 'update'] /** link this to the appropriate movie controller method */);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'] /** link this to the appropriate movie controller method */);

Route::get('/movies/{movie}/reviews', [ReviewController::class, ''] /** link this to the appropriate review controller method */);
Route::post('/movies/{movie}/reviews', [ReviewController::class, '']/** link this to the appropriate review controller method */);
Route::get('/reviews/{review}', [ReviewController::class, '']/** link this to the appropriate review controller method */);
Route::patch('/reviews/{review}', [ReviewController::class, '']/** link this to the appropriate review controller method */);
Route::delete('/reviews/{review}', [ReviewController::class, '']/** link this to the appropriate review controller method */);
