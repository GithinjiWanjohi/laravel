<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function Reviews(){
        return $this->hasMany('App\Review');
    }
}
