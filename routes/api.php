<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

include_once('src/Tweets/Infrastructure/Http/Routes/Routes.php');

Route::get('/test', function(Request $request){
    return response()->json(['result' => 'OK']);
});
