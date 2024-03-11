<?php
namespace App\LogicMafiaServices;

use App\Http\Controllers\GameController;
use App\Models\PlayerInGame;
use Illuminate\Http\Request; 
use App\Models\Round;


class RoundService 
{
    public function KickPlayer(Request $request, $roundId){
        $round = Round::find($roundId);
        $round->HowDie = $request->HowDie; 
        $round->WhoDie = $request->WhoDie; 
        $round->update(); 
        $round->save(); 
        return $round;
    }
}
?>