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

        //DB::table('users')->where('name', 'acatarino')->delete();

        //$user = User::find('acatarino');
        //dd($user);

        $this->assertTrue(true);
    }
}
