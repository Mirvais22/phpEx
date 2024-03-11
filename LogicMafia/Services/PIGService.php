<?php
namespace App\LogicMafiaServices;

use App\Models\PlayerInGame;
use Illuminate\Http\Request; 

class PIGService{
    public function createPig(Request $request){
        $pig = new PlayerInGame();
        $pig->status = true;
        $pig->game_id = $request->game_id;
        $pig->role_id = $request->role_id;
        $pig->user_id = $request->user_id;
        $pig->save();
        return $pig;
    }
}

?>