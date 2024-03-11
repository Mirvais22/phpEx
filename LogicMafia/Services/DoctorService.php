<?php
namespace App\LogicMafiaServices;

use App\Http\Controllers\GameController;
use App\Models\PlayerInGame;
use Illuminate\Http\Request; 
use App\Models\Round; 

class DoctorService{
    public function HealPlayer(Request $request, $roundId){
        $round = Round::find($roundId);
        if($round->WhoDie == $request->userId){
            $round->WhoDie = null;
        }
        $round->update(); 
        $round->save(); 
        return $round;
    }
}
?>