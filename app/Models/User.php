<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $hidden= [
        'password',
    ];


    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function playerInGame(){
        return $this->hasOne(PlayerInGame::class);
    }

    public function user(){
        return $this->belongsTo(UsersInRoom::class);
    }
}
