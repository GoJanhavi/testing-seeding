<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /*test create user starts*/
    public function testCreateUser()
    {
        $user = factory(User::class)->create();
        $this->assertInstanceOf('App\User', $user);
    }
    public function testCreateUserType2()
    {
        $user = factory(User::class)->create([
            'name' => 'Janhavi',
            'email' => 'jg688@njit.edu',
            'email_verified_at' => now(),
            'password' => '*#abcdef*',
            'remember_token' => str_random(10),
        ]);
        $this->assertInstanceOf('App\User', $user);
    }
    /*test create user ends*/

    public function testUpdateUserEntry(){
      //  $user = User::where('email', '=', 'jg688@njit.edu')->get();
        $user= User::find(1);
        $user->name = 'Steve Smith';
        $this->assertTrue($user->save());
    }
}