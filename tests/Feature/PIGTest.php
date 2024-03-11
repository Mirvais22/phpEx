<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PIGTest extends TestCase
{
    public function testCreatePIG() : void
    {
        $pig = [
            'game_id' => 8,
            'role_id' => 8,
            'user_id' => 8,
        ];
        $response = $this->post('api/CreatePIG', $pig);
        $response->assertStatus(201);
        $this->assertDatabaseHas('player_in_games', $pig);
    }

    public function testDeletePIG(): void
    {
        $response = $this->delete('api/DeletePIG/2');

        $response->assertStatus(410);
    }

    public function testGetAllPIG(): void
    {
        $response = $this->get('api/GetAllPIG');
        $response->assertStatus(200);
    }

    public function testPIGById(): void
    {
        $response = $this->get('api/GetPIGById/1');
        $response->assertStatus(200);
    }

    public function testUpdatePIG(): void
    {

        $pig = [
            'status' => false
        ];

        $response = $this->put('api/UpdatePIG_status/1', $pig);
        $response->assertStatus(201);
    }






    public function testDeletePIGError(): void
    {
        $response = $this->delete('api/DeletePIG/');

        $response->assertStatus(404);
    }

    public function testPIGByIdError(): void
    {
        $response = $this->get('api/GetPIGById/');
        $response->assertStatus(404);
    }
    public function testCreatePIGError() : void
    {
        $pig = [
            'status' => null,
            'game_id' => null,
            'role_id' => null,
            'user_id' => null,
        ];
        $response = $this->post('api/CreatePIG', $pig);
        $response->assertStatus(500);
    }

    public function testUpdatePIGError(): void
    { {
            $pig = [
                'status' => rand(0, 1),
                'game_id' => random_int(1, 10),
                'role_id' => random_int(1, 10),
                'user_id' => random_int(1, 10),
            ];

            $response = $this->put('api/UpdatePIG_status/16', $pig);
            $response->assertStatus(400);
        }
    }







    public function testCreatePIGFou() : void
    {
        $pig = [
            'game_id' => 8,
            'role_id' => 8,
            'user_id' => 8,
        ];
        $response = $this->post('api/CreatePIGssssssssssss', $pig);
        $response->assertStatus(404);
        $this->assertDatabaseHas('player_in_games', $pig);
    }

    public function testDeletePIGFou(): void
    {
        $response = $this->delete('api/DeletePIGsssssss/2');

        $response->assertStatus(404);
    }

    public function testGetAllPIGFou(): void
    {
        $response = $this->get('api/GetAllPIGsssssss');
        $response->assertStatus(404);
    }

    public function testPIGByIdFou(): void
    {
        $response = $this->get('api/GetPIGByIdsssssss/1');
        $response->assertStatus(404);
    }

    public function testUpdatePIGFou(): void
    {

        $pig = [
            'status' => false
        ];

        $response = $this->put('api/UpdatePIG_statusssssss/1', $pig);
        $response->assertStatus(404);
    }
}
