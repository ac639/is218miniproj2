<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Test 1

        $user = User::find(1);
        //dd($user);

        $this->assertTrue(true);

        ////////////////////////////////////

        //Test 2
        $user2 = User::inRandomOrder()->first();


        $this->assertInternalType('int',$user2->id);


    }

    public function testExample2()
    {

        $user = User::find(1);


        $this->assertInstanceOf('App\User',$user);

    }

    public function testExample3()
    {

        $user = User::all();


        $this->assertTrue(true);

    }
}
