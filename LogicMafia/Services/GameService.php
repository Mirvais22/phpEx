<?php
namespace App\LogicMafiaServices;

use App\Models\User;
use App\Models\UsersInRoom;
use Services\MafiaService;
use App\Models\PlayerInGame;
use Illuminate\Http\Request; 

class GameService{
    public function GivesRandomRole(array $pig){
        $roles = [1,2,3,4,4,4];
        shuffle($roles);
        if(count($pig) == 6){
            foreach($this->$pig as $pigg){
                $i = 0;
                $pigg->role_id = $roles[$i];
                unset($roles[$i]);
                $pigg->update(); 
                $pigg->save(); 
                return $pigg;
            }
        }
    }

    public function getListUsersInRoom($roomId){
        $userInRoom = UsersInRoom::find()->whereId("room_id = :{$roomId}")->all();
        return $userInRoom;
    }
}

?>