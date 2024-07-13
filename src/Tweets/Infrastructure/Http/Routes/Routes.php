<?php

namespace Src\Tweets\Infrastructure\Http\Routes;

use Illuminate\Support\Facades\Route;
use Src\Tweets\Infrastructure\Http\Controllers\GetAllTweetsController;
use Src\Tweets\Infrastructure\Http\Controllers\GetTweetsByHashtagController;
use Src\Tweets\Infrastructure\Http\Controllers\RandomizeTweetsController;

Route::prefix('tweets')->middleware(['auth:sanctum'])->group(function(){
    Route::get('/', GetAllTweetsController::class);
    Route::get('/hashtag/{hashtag}', GetTweetsByHashtagController::class);
    Route::post('/randomize', RandomizeTweetsController::class);
});


