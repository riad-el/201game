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
   session()->put("id",$game->id);
   session()->put("message","");
    return view("play",["message"=>session()->get("message")]);

   }
   public function play(Request $req)
   {
      $nbr1=$req->input("number");
     
      $id=session()->get("id");
    
      $game=Game::find($id);
             //null
      $nbrs=["nb1"=>$game->nb1,"nb2"=>$game->nb2,"nb3"=>$game->nb3,"nb4"=>$game->nb4,"nb5"=>$game->nb5];
      $finish=true;
      foreach($nbrs as $key=>$nbr)
      {
         if($nbr==null)
         {
          $finish=false;
            $nbrs[$key]=$nbr1;
            break;
         }
        
      }
     if(!$finish)
     {
      
      $message="Vous avez choisi : ".$nbr1;
      if($game->rand==$nbr1)
      {
         $message.=" Bravooo!!";
      }elseif($game->rand>$nbr1)
      {
         $message.=" : UP";
      }elseif($game->rand<$nbr1)
      {
         $message.=" : DOWN";
      }
      $sessmessage=session()->get("message")." ".$message;
      session()->put("message",$sessmessage);
      $gm=Game::where("id",$id)->update($nbrs);
      return view("play",["message"=>session()->get("message")]);
   }
   return view("result");;
     

   }
}
