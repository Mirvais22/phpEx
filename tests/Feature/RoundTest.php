<?php

namespace Tests\Feature;

use App\Http\Controllers\RoundController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use database\Factories\RoundFactory;
use Illuminate\Http\Request; 

class RoundTest extends TestCase
{
    public function testCreateRound() : void
    {
        $round = [
            'dayTime' => "Str::random(5)", 
            'WhoDie' => random_int(1,10),
            'HowDie' => "Str::random(5)",
            'Count' => random_int(1,10),
        ];
        $response = $this->post('api/CreateRound', $round);
        $response->assertStatus(201);
        $this->assertDatabaseHas('rounds', $round);
    }
    public function testGetAllRounds() : void
    {
        $response = $this->get('api/GetAllRounds');
        $response->assertStatus(200);
    }
    public function testGetRoundById() : void
    {
        $response = $this->get('api/GetRoundById/17');
        $response->assertStatus(200);
    }
    public function testUpdateRound() : void
    {
        $round = [
            'dayTime' => "Str::random(5)", 
            'WhoDie' => random_int(1,10),
            'HowDie' => "Str::random(5)",
            'Count' => random_int(1,10),
        ];

        $response = $this->put('api/UpdateRound/1', $round);
        $response->assertStatus(201);
        $this->assertDatabaseHas('rounds', $round);
    }
    public function testKillPlayer() : void
    {
        $round = [
            'WhoDie' => random_int(1,10),
            'HowDie' => "Str::random(5)",
        ];

        $response = $this->put('api/KillPlayer/1', $round);
        $response->assertStatus(200);
        $this->assertDatabaseHas('rounds', $round);
    }
    public function testHealPlayer() : void
    {
        $round = [
            'WhoDie' => null
        ];

        $response = $this->put('api/HealPlayer/1', $round);
        $response->assertStatus(200);
    }
    public function testHealPlayerFnaf() : void
    {
        $round = [
            'WhoDie' => random_int(1,10)
        ];

        $response = $this->put('api/HealPlayer/1', $round);
        $response->assertStatus(200);
        $this->assertDatabaseHas('rounds', $round);
    }
    public function testKickPlayer() : void
    {
        $round = [
            'WhoDie' => random_int(1,10),
            'HowDie' => "Str::random(5)",
        ];

        $response = $this->put('api/KickPlayer/1', $round);
        $response->assertStatus(200);
        $this->assertDatabaseHas('rounds', $round);
    }
    public function testCheckPlayer() : void
    {
        $response = $this->get('api/CheckPlayer/4');
        $response->assertStatus(200);
    }



    public function testCreateRoundError() : void
    {
        $round = [
            'dayTime' => "", 
            'WhoDie' => 0,
            'HowDie' => "",
            'Count' => 0,
        ];
        $response = $this->post('api/CreateRound', $round);
        $response->assertStatus(500);
    }
    public function testGetRoundByIdError() : void
    {
        $response = $this->get('api/GetRoundById/');
        $response->assertStatus(404);
    }
    public function testUpdateRoundError() : void
    {
        $round = [
            'dayTime' => "Str::random(5)", 
            'WhoDie' => random_int(1,10),
            'HowDie' => "Str::random(5)",
            'Count' => random_int(1,10),
        ];

        $response = $this->put('api/UpdateRound/16', $round);
        $response-> assertStatus(400);
    }
    public function testKillPlayerError() : void
    {
        $round = [
            'WhoDie' => 0,
            'HowDie' => "",
        ];

        $response = $this->put('api/KillPlayer/0', $round);
        $response->assertStatus(418);
    }
    public function testHealPlayerError() : void
    {
        $round = [
            'WhoDie' => null
        ];

        $response = $this->put('api/HealPlayer/0', $round);
        $response->assertStatus(418);
    }
    public function testHealPlayerFnafError() : void
    {
        $round = [
            'WhoDie' => 2
        ];

        $response = $this->put('api/HealPlayer/0', $round);
        $response->assertStatus(418);
    }
    public function testKickPlayerError() : void
    {
        $round = [
            'WhoDie' => 0,
            'HowDie' => "",
        ];

        $response = $this->put('api/KickPlayer/1', $round);
        $response->assertStatus(500);
    }
    public function testCheckPlayerError() : void
    {
        $response = $this->get('api/CheckPlayer/');
        $response->assertStatus(404);
    }












    public function testCreateRoundFou() : void
    {
        $round = [
            'dayTime' => "Str::random(5)", 
            'WhoDie' => random_int(1,10),
            'HowDie' => "Str::random(5)",
            'Count' => random_int(1,10),
        ];
        $response = $this->post('api/CreateRoundssss', $round);
        $response->assertStatus(404);
    }
    public function testGetAllRoundsFou() : void
    {
        $response = $this->get('api/GetAllRoundssssss');
        $response->assertStatus(404);
    }
    public function testGetRoundByIdFou() : void
    {
        $response = $this->get('api/GetRoundByIdssssss/17');
        $response->assertStatus(404);
    }
    public function testUpdateRoundFou() : void
    {
        $round = [
            'dayTime' => "Str::random(5)", 
            'WhoDie' => random_int(1,10),
            'HowDie' => "Str::random(5)",
            'Count' => random_int(1,10),
        ];

        $response = $this->put('api/UpdateRoundsssss/1', $round);
        $response->assertStatus(404);
    }
    public function testKillPlayerFou() : void
    {
        $round = [
            'WhoDie' => random_int(1,10),
            'HowDie' => "Str::random(5)",
        ];

        $response = $this->put('api/KillPlayerssssss/1', $round);
        $response->assertStatus(404);
        $this->assertDatabaseHas('rounds', $round);
    }
    public function testHealPlayerFou() : void
    {
        $round = [
            'WhoDie' => null
        ];

        $response = $this->put('api/HealPlayerssssss/1', $round);
        $response->assertStatus(404);
    }
    public function testHealPlayerFnafFou() : void
    {
        $round = [
            'WhoDie' => random_int(1,10)
        ];

        $response = $this->put('api/HealPlayerssssss/1', $round);
        $response->assertStatus(404);
        $this->assertDatabaseHas('rounds', $round);
    }
    public function testKickPlayerFou() : void
    {
        $round = [
            'WhoDie' => random_int(1,10),
            'HowDie' => "Str::random(5)",
        ];

        $response = $this->put('api/KickPlayersssssss/1', $round);
        $response->assertStatus(404);
        $this->assertDatabaseHas('rounds', $round);
    }
    public function testCheckPlayerFou() : void
    {
        $response = $this->get('api/CheckPlayersssssss/4');
        $response->assertStatus(404);
    }
}
