<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{
    public function testCreateRole(): void
    {
        $role = [
            'name' => "Toha",
            'type' => "Str::random(10)",
        ];
        $response = $this->post('api/CreateRole', $role);
        $response->assertStatus(201);
        $this->assertDatabaseHas('roles', $role);
    }

    public function testGetAllRole(): void
    {
        $response = $this->get('api/GetAllRoles');
        $response->assertStatus(201);
    }

    public function testRoleById(): void
    {
        $response = $this->get('api/GetRoleById/17');
        $response->assertStatus(201);
    }





    public function testCreateRoleError(): void
    {
        $role = [
            'name' => "",
            'type' => "",
        ];
        $response = $this->post('api/CreateRole', $role);
        $response->assertStatus(500);
        // $this->assertDatabaseHas('roles', $role);
    }

    public function testRoleByIdError(): void
    {
        $response = $this->get('api/GetRoleById/');
        $response->assertStatus(404);
    }





    public function testCreateRoleFou(): void
    {
        $role = [
            'name' => "Toha",
            'type' => "Str::random(10)",
        ];
        $response = $this->post('api/CreateRolessss', $role);
        $response->assertStatus(404);
        $this->assertDatabaseHas('roles', $role);
    }

    public function testGetAllRoleFou(): void
    {
        $response = $this->get('api/GetAllRolesssss');
        $response->assertStatus(404);
    }

    public function testRoleByIdFou(): void
    {
        $response = $this->get('api/GetRoleByIdsssss/17');
        $response->assertStatus(404);
    }
}
