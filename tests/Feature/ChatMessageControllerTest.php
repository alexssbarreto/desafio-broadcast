<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertTrue;

class ChatMessageControllerTest extends TestCase
{
    /**
     * @test
     */
    public function showBeAllUsersStatus200()
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
    }

    public function showBeAllMessagesStatus200()
    {
        $response = $this->get('/api/messages');

        $response->assertStatus(200);
    }
}
