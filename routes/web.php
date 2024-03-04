<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;



//Route::get("/start",[GameController::class,"start"]);
Route::get("start",function(){
    return view("start");
});
//Route::view("start","start");
Route::post("start",[GameController::class,"start"])->name("start");
Route::post("play",[GameController::class,"play"])->name("play");