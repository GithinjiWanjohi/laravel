<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function show(){
        $games = Game::all();
        return view('games', ['games'=>$games]);
    }

    public function fetch($id){
        $games = Game::find($id);
        return view('games', ['games'=>$games]);
    }

    public function edit($id){
        $game = Game::find($id);
        $game->publisher = "Black Sheep";
        $game->save();
        return redirect('/games');
    }
}
