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
    public function testRecordCount(){
        $user = User::all();
        $userCount = 50;
        $this->assertCount($userCount, $user);
    }

   public function testCreateUser()
    {
        $user = factory(User::class)->create();
        $this->assertInstanceOf('App\User', $user);
    }


    public function testUpdateUserEntry(){
      //  $user = User::where('email', '=', 'jg688@njit.edu')->get();
        $user= User::find(1);
        $user->name = 'Steve Smith';
        $user->save();
        $updatedUser = User::find(1);
        $this->assertEquals($updatedUser->name, 'Steve Smith');
    }

    public function testDeleteUser(){
        $user= User::find(1);
        $this->assertTrue($user->delete());
    }


}
