<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GameTest extends TestCase
{
    public function testCreateGame(): void
    {
        $game = [
            'status' => "Win Alim",
            'whoMove' => 6,
            'room_id' => random_int(1, 10),
        ];
        $response = $this->post('api/CreateGame', $game);
        $response->assertStatus(201);
    }

    public function testDeleteGame(): void
    {
        $response = $this->delete('api/DeleteGame/2');

        $response->assertStatus(410);
    }

    public function testGetAllGame(): void
    {
        $response = $this->get('api/GetAllGames');
        $response->assertStatus(201);
    }

    public function testGameById(): void
    {
        $response = $this->get('api/GetGameById/17');
        $response->assertStatus(201);
    }

    public function testUpdateGameStatus(): void
    {

        $game = [
            'status' => "Win Alim"
        ];

        $response = $this->put('api/UpdateGameStatus/1', $game);
        $response->assertStatus(201);
    }

    public function testUpdateGameMove(): void
    {

        $game = [
            'whoMove' => 6
        ];

        $response = $this->put('api/UpdateGameMove/1', $game);
        $response->assertStatus(201);
    }





    public function testCreateGameError(): void
    {
        $game = [
            'status' => null,
            'whoMove' => null,
            'room_id' => null,
        ];
        $response = $this->post('api/CreateGame', $game);
        $response->assertStatus(500);
        // $this->assertDatabaseHas('games', $game);
    }

    public function testDeleteGameError(): void
    {
        $response = $this->delete('api/DeleteGame/');

        $response->assertStatus(404);
    }

    public function testGameByIdError(): void
    {
        $response = $this->get('api/GetGameById/');
        $response->assertStatus(404);
    }

    public function testUpdateGameError(): void
    { {
            $game = [
                'status' => null
            ];

            $response = $this->put('api/UpdateGameStatus/', $game);
            $response->assertStatus(404);
        }
    }
    public function testUpdateGameMoveError(): void
    {

        $game = [
            'whoMove' => null
        ];

        $response = $this->put('api/UpdateGameMove/', $game);
        $response->assertStatus(404);
    }

    public function testUpdateGameErrorFnaf(): void
    { {
            $game = [
                'status' => ""
            ];

            $response = $this->put('api/UpdateGameStatus/3', $game);
            $response->assertStatus(500);
        }
    }
    public function testUpdateGameMoveErrorFnaf(): void
    {

        $game = [
            'whoMove' => ""
        ];

        $response = $this->put('api/UpdateGameMove/3', $game);
        $response->assertStatus(500);
    }







    public function testCreateGameFou(): void
    {
        $game = [
            'status' => "Win Alim",
            'whoMove' => 6,
            'room_id' => random_int(1, 10),
        ];
        $response = $this->post('api/CreateGamesssss', $game);
        $response->assertStatus(404);
    }

    public function testDeleteGameFou(): void
    {
        $response = $this->delete('api/DeleteGamessssss/2');

        $response->assertStatus(404);
    }

    public function testGetAllGameFou(): void
    {
        $response = $this->get('api/GetAllGamesssssss');
        $response->assertStatus(404);
    }

    public function testGameByIdFou(): void
    {
        $response = $this->get('api/GetGameByIdsssss/17');
        $response->assertStatus(404);
    }

    public function testUpdateGameStatusFou(): void
    {

        $game = [
            'status' => "Win Alim"
        ];

        $response = $this->put('api/UpdateGameStatusssss/1', $game);
        $response->assertStatus(404);
    }

    public function testUpdateGameMoveFou(): void
    {

        $game = [
            'whoMove' => 6
        ];

        $response = $this->put('api/UpdateGameMovesssss/1', $game);
        $response->assertStatus(404);
    }
}
