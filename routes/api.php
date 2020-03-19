<?php

use App\Http\Resources\SongResource;
use App\Song;
// use App\Http\Resources\SongsCollection;
// use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/songs/{song}', function(Song $song) {
    return new SongResource($song);
});

Route::get('/songs', function() {
    return SongResource::collection(Song::all());
});

// \DB::listen(function($query) {
//     var_dump($query->sql);
// });