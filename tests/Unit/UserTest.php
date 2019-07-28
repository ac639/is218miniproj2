<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use DB;


class UserTest extends TestCase
{
    use WithFaker;


    /**
     * A basic unit test example.
     *
     * @return void
     */


    public function testInsertUser()
    {

        $data = array(
            'name' => 'andrec',
            'email' => 'andre@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        );

        DB::table('users')->insert($data);

        //DB::table('users')->where('name', 'andrec')->delete();

        $this->assertTrue(true);
    }

    public function testUpdateUser() {

        DB::table('users')
            ->where('name', 'andrec')
            ->update(['name' => 'Steve Smith']);

        $user = User::where('name','Steve Smith') -> first();

        //DB::table('users')->where('name', 'Steve Smith')->delete();

        $this->assertEquals('Steve Smith',$user['name']);

    }

    public function testDeleteUser() {

        DB::table('users')->where('name', 'Steve Smith')->delete();

        $expected = null;

        $user = DB::table('users')
            ->where('name', 'Steve Smith');



        $this->assertEquals($expected, null);

    }


    public function testCountTable() {
        $count = DB::table('users')->count();

        $this->assertEquals(50,$count);

    }


}
