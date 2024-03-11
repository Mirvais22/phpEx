<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserInRoomTest extends TestCase
{

    public function testCreateUIR(): void
    {
        $uir = [
            'user_id' => 1,
            'room_id' => 1
        ];
        $response = $this->post('api/CreateUIR', $uir);
        $response->assertStatus(201);
        $this->assertDatabaseHas('users_in_rooms', $uir);
    }

    public function testDeleteUIR(): void
    {
        $response = $this->delete('api/DeleteUIR/1');

        $response->assertStatus(410);
    }

    public function testGetAllUIR(): void
    {
        $response = $this->get('api/GetAllUIRs');
        $response->assertStatus(200);
    }

    public function testUIRById(): void
    {
        $response = $this->get('api/GetUIRById/1');
        $response->assertStatus(204);
    }

    public function testUpdateUIR(): void
    {

        $uir = [
            'user_id' => 6,
            'room_id' => 9,
        ];

        $response = $this->put('api/UpdateUIR/2', $uir);
        $response->assertStatus(201);
    }





    public function testCreateUIRError(): void
    {
        $uir = [
            'user_id' => null,
            'room_id' => null
        ];

        $response = $this->post('api/CreateUIR', $uir);
        $response->assertStatus(500);
        // $this->assertDatabaseHas('users', $user);
    }

    public function testDeleteUIRError(): void
    {
        $response = $this->delete('api/DeleteUIR/');

        $response->assertStatus(404);
    }

    public function testUIRByIdError(): void
    {
        $response = $this->get('api/GetUIRById/');
        $response->assertStatus(404);
    }

    public function testUpdateUIRError(): void
    { {
        $uir = [
            'user_id' => null,
            'room_id' => null
        ];


            $response = $this->put('api/UpdateUIR/1', $uir);
            $response-> assertStatus(400);
        }
    }
    









    public function testCreateUIRFou(): void
    {
        $uir = [
            'user_id' => 1,
            'room_id' => 1
        ];
        $response = $this->post('api/CreateUIRsssss', $uir);
        $response->assertStatus(404);
        $this->assertDatabaseHas('users_in_rooms', $uir);
    }

    public function testDeleteUIRFou(): void
    {
        $response = $this->delete('api/DeleteUIRssss/1');

        $response->assertStatus(404);
    }

    public function testGetAllUIRFou(): void
    {
        $response = $this->get('api/GetAllUIRsssss');
        $response->assertStatus(404);
    }

    public function testUIRByIdFou(): void
    {
        $response = $this->get('api/GetUIRByIdssss/1');
        $response->assertStatus(404);
    }

    public function testUpdateUIRFou(): void
    {

        $uir = [
            'user_id' => 6,
            'room_id' => 9,
        ];

        $response = $this->put('api/UpdateUIRsssss/2', $uir);
        $response->assertStatus(404);
    }
}
