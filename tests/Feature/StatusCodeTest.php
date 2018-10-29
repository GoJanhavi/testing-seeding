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
    public function testLoginStatus()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function testAboutStatus()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }
    public function testContactStatus()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
}
