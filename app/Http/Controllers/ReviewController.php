<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function getGameReviews($id){
        $game = Game::find($id);
        return $game->reviews;
    }
}
