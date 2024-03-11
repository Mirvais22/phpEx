<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function round(){
        return $this->hasMany(Round::class);
    }   

    public function playerInGame(){
        return $this->hasOne(PlayerInGame::class);
    }
}
