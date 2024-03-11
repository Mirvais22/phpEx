<?php

namespace Tests\Feature;

use Database\Factories\RoomFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use app\Http\Controllers\RoomController;
use Illuminate\Http\Request; 

class RoomTest extends TestCase
{
    public function testCreateRoom() : void
    {
        $room = [
            'userId' => 55,
            "status" => true,
            'countOfSpectatot' => "3",
        ];
        $response = $this->post('api/CreateRoom', $room);
        $response->assertStatus(201);
    }
    public function testGetAllRooms() : void
    {
        $response = $this->get('api/GetAllRooms');
        $response->assertStatus(200);
    }
    public function testGetRoomById() : void
    {
        $response = $this->get('api/GetRoomById/8');
        $response->assertStatus(201);
    }
    public function testUpdateRoom() : void
    {
        $room = [
            'userId' => 55,
            'status' => true,
            'countOfSpectatot' => "6671337",
        ];

        $response = $this->put('api/UpdateRoom/8', $room);
        $response->assertStatus(201);
    }
    public function testDeleteRoom() : void
    {
        $response = $this->delete('api/DeleteRoom/2');

        $response->assertStatus(410);
    }

    public function testCreateRoomError() : void
    {
        $user = [
            'userId' => 0,
            'status' => null,
            'countOfSpectatot' => null,
        ];
        $response = $this->post('api/CreateRoom', $user);
        $response->assertStatus(201);
        // $this->assertDatabaseHas('users', $user);
    }
    public function testGetRoomByIdError() : void
    {
        $response = $this->get('api/GetRoomById/');
        $response->assertStatus(404);
    }
    public function testUpdateRoomError() : void
    {
        $user = [
            'userId' => 1,
            'status' => rand(0,1),
            'countOfSpectatot' => random_int(1,100),
        ];

        $response = $this->put('api/UpdateRoom/16', $user);
        $response->assertStatus(400);
    }
    public function testDeleteRoomError() : void
    {
        $response = $this->delete('api/DeleteRoom/');

        $response->assertStatus(404);
    }
    










    public function testCreateRoomFou() : void
    {
        $room = [
            'userId' => 55,
            "status" => true,
            'countOfSpectatot' => "3",
        ];
        $response = $this->post('api/CreateRoomssss', $room);
        $response->assertStatus(404);
    }
    public function testGetAllRoomsFou() : void
    {
        $response = $this->get('api/GetAllRoomssss');
        $response->assertStatus(404);
    }
    public function testGetRoomByIdFou() : void
    {
        $response = $this->get('api/GetRoomByIdssss/17');
        $response->assertStatus(404);
    }
    public function testUpdateRoomFou() : void
    {
        $room = [
            'userId' => 55,
            'status' => true,
            'countOfSpectatot' => "6671337",
        ];

        $response = $this->put('api/UpdateRoomsss/59', $room);
        $response->assertStatus(404);
    }
    public function testDeleteRoomFou() : void
    {
        $response = $this->delete('api/DeleteRoomsss/2');

        $response->assertStatus(404);
    }
}
