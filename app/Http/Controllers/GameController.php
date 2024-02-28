<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
   public function start(Request $req){
    $nom= $req->input("nom");
    $rand=random_int(1,99);
    //$game=new Game();
    //$game->nom=$nom;
    //$game->rand=$rand;
    //$game->save();
    $game=Game::create(["nom"=>$nom,"rand"=>$rand]);
    return view("play");

   }
}
