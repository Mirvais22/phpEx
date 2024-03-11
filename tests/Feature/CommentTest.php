<?php

namespace Tests\Feature;

use App\Models\Room;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    public function testCreateComment(): void
    {
        $comment = [
            'Text' => 7,
            'room_id' => Room::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
        $response = $this->post('api/CreateComment', $comment);
        $response->assertStatus(201);
        $this->assertDatabaseHas('comments', $comment);
    }

    public function testDeleteComment(): void
    {
        $response = $this->delete('api/DeleteComment/2');

        $response->assertStatus(410);
    }

    public function testGetAllComment(): void
    {
        $response = $this->get('api/GetAllComments');
        $response->assertStatus(201);
    }

    public function testCommentById(): void
    {
        $response = $this->get('api/GetCommentById/17');
        $response->assertStatus(201);
    }




    public function testCreateCommentError(): void
    {
        $comment = [
            'Text' => null,
            'room_id' => null,
            'user_id' => null,
        ];
        $response = $this->post('api/CreateComment', $comment);
        $response->assertStatus(500);
        // $this->assertDatabaseHas('comments', $comment);
    }

    public function testDeleteCommentError(): void
    {
        $response = $this->delete('api/DeleteComment/');

        $response->assertStatus(404);
    }

    public function testCommentByIdError(): void
    {
        $response = $this->get('api/GetCommentById/111111111111');
        $response->assertStatus(204);
    }







    public function testCreateCommentFou(): void
    {
        $comment = [
            'Text' => 7,
            'room_id' => random_int(1, 10),
            'user_id' => random_int(1, 10),
        ];
        $response = $this->post('api/CreateCommentssssss', $comment);
        $response->assertStatus(404);
    }

    public function testDeleteCommentFou(): void
    {
        $response = $this->delete('api/DeleteCommentssssss/2');

        $response->assertStatus(404);
    }

    public function testGetAllCommentFou(): void
    {
        $response = $this->get('api/GetAllCommentssssss');
        $response->assertStatus(404);
    }

    public function testCommentByIdFou(): void
    {
        $response = $this->get('api/GetCommentByIdssssss/17');
        $response->assertStatus(404);
    }
}
