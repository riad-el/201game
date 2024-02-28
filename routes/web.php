<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;


Route::get('/', function () {
    return view('welcome');
});
//Route::get("/start",[GameController::class,"start"]);
Route::get("start",function(){
    return view("start");
});
Route::post("start",[GameController::class,"start"])->name("start");
