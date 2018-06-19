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
        $games = Game::find($id);
        return view('create', ['games'=>$games]);
    }

    public function remove($id){
        $game = Game::destroy($id);
        $game->publisher = "Black Sheep";
        $game->save();
        return redirect('/games');
    }

    public function create(){
        return view('create');
    }

    public function store(){
        $game = null;
        if(request('id') != null){
            $game = Game::find($id);
        } else{
            $game = new Game();
        }

        $game = new Game();
        $game->title = request('title');
        $game->publisher = request('title');
        $game->releaseyear = request('roy');
        $game->save();

        return redirect('/games');
    }
}
