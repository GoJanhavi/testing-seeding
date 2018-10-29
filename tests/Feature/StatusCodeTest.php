<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StatusCodeTest extends TestCase
{
    public function testRegisterStatus()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
}
