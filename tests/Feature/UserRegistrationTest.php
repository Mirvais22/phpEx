<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use database\Factories\UserFactory;
use app\Http\Controllers\UserController;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserRegistrationTest extends TestCase
{

    public function testCreateUser(): void
    {
        $user = [
            'userName' => "ALIM",
            'password' => "MIRVA",
            'wins' => 0,
            'loses' => 0,
            'status' => "SUPERPUPERTEAM",
        ];
        $response = $this->post('api/CreateUser', $user);
        $response->assertStatus(201);
        $this->assertDatabaseHas('users', $user);
    }

    public function testDeleteUser(): void
    {
        $response = $this->delete('api/DeleteUser/2');

        $response->assertStatus(410);
    }

    public function testGetAllUser(): void
    {
        $response = $this->get('api/GetAllUsers');
        $response->assertStatus(200);
    }

    public function testUserById(): void
    {
        $response = $this->get('api/GetUserById/17');
        $response->assertStatus(200);
    }

    public function testUpdateUser(): void
    {

        $user = [
            'userName' => "AAAAAAAA",
            'password' => "HUCHDCHDC",
            'wins' => 5,
            'loses' => 5,
            'status' => "NURIK GAy",
        ];

        $response = $this->put('api/UpdateUser/5', $user);
        $response->assertStatus(201);
        $this->assertDatabaseHas('users', $user);
    }





    public function testCreateUserError(): void
    {
        $user = [
            'userName' => "",
            'password' => "",
            'wins' => 0,
            'loses' => 0,
            'status' => "",
        ];
        $response = $this->post('api/CreateUser', $user);
        $response->assertStatus(500);
        // $this->assertDatabaseHas('users', $user);
    }

    public function testDeleteUserError(): void
    {
        $response = $this->delete('api/DeleteUser/');

        $response->assertStatus(404);
    }

    public function testUserByIdError(): void
    {
        $response = $this->get('api/GetUserById/');
        $response->assertStatus(404);
    }

    public function testUpdateUIRError(): void
    { {
            $user = [
                'userName' => "",
                'password' => "",
                'wins' => 0,
                'loses' => 0,
                'status' => "",
            ];

            $response = $this->put('api/UpdateUser/16', $user);
            $response-> assertStatus(500);
        }
    }







    public function testCreateUserFou(): void
    {
        $user = [
            'userName' => "ALIM",
            'password' => "MIRVA",
            'wins' => 0,
            'loses' => 0,
            'status' => "SUPERPUPERTEAM",
        ];
        $response = $this->post('api/CreateUsersssss', $user);
        $response->assertStatus(404);
        $this->assertDatabaseHas('users', $user);
    }
    public function testDeleteUserFou(): void
    {
        $response = $this->delete('api/DeleteUsersss/2');

        $response->assertStatus(404);
    }

    public function testGetAllUserFou(): void
    {
        $response = $this->get('api/GetAllUsersssss');
        $response->assertStatus(404);
    }

    public function testUserByIdFou(): void
    {
        $response = $this->get('api/GetUserByIdssss/17');
        $response->assertStatus(404);
    }

    public function testUpdateUserFou(): void
    {

        $user = [
            'userName' => "AAAAAAAA",
            'password' => "HUCHDCHDC",
            'wins' => 5,
            'loses' => 5,
            'status' => "NURIK GAy",
        ];

        $response = $this->put('api/UpdateUsersssss/5', $user);
        $response->assertStatus(404);
        $this->assertDatabaseHas('users', $user);
    }
}