<?php
namespace App\LogicMafiaServices;

use App\Http\Controllers\GameController;
use App\Models\PlayerInGame;
use Illuminate\Http\Request; 
use App\Models\Round; 

class MusorService{
    public function CheckPlayer(Request $request){
        $pig = PlayerInGame::find($request->user_id);
        $role = $pig->role_id;
        return $role;
    }
}

?>